"""
    given input:
        vertabelo SQL file
    desired output:
        automate code changes to implement table inheritance
"""

faa_pairs = [
    ('amount','nutrient_amount'),
    ('nutrient_amount','ingredient_in_recipe_nutrient_amount'),
    ('nutrient_amount','ingredient_serving_nutrient_amount'),
    ('nutrient_amount','nutrition_profile_tracked_nutrient')
]

import sys
import codecs
from codecs import open

sqlfile = sys.argv[1]
sql = open(sqlfile, mode='r', encoding='utf-8-sig').read()
query_list = ['{};'.format(i) for i in sql[97:].split(';')[:-1]]

def find_endex(list):
    for i in range(len(list)):
        if '-- views' in list[i]: 
            return (i)

def move_list_items(list):
    for i in range(len(list)):
        if ' INHERITS ' in list[i]:
            endex = find_endex(list)
            list.insert(endex,list[i])            
            list.pop(i)
            print ("O Item {} moved to index {}".format(i,endex))
            return True
    return False

def add_inheritance(list, parent, child):
    print ("add inheritance:")
    query = 'CREATE TABLE ' + child + ' ('
    suffix = ' INHERITS (' + parent + ');'
    for i in range(len(list)):
        if query in list[i] and suffix not in list[i]:
            list[i] = '{}'.format(list[i][:-1]+suffix)
            print ("O {} now inherits {}".format(child,parent))
            move_list_items(list)
            return True
        elif query in list[i] and suffix in list[i]:
            print ("- {} already inherits {}".format(child,parent))
            return False
    print ("Could not find {} table query".format(child))
    return False

def remove_redundant_columns(list,parent,child):
    print ("remove redundant columns:")
    query = 'CREATE TABLE ' + child + ' ('
    self_id = 'id serial  NOT NULL,'
    parent_id = '{}_id int  NOT NULL,'.format(parent)
    for i in range(len(list)):
        if query in list[i] and self_id in list[i] and parent_id in list[i]:
            list[i] = list[i].replace(self_id,'')
            list[i] = list[i].replace(parent_id,'')
            print ("O Redundant columns removed from {}.".format(child))
            return True
    print ("- Redundant columns not found for {}".format(child))
    return False

def remove_redundant_keys(list,parent,child):
    print ("remove redundant keys:")
    query = 'ALTER TABLE {} ADD CONSTRAINT'.format(child)
    red_key = 'FOREIGN KEY ({}_id)'.format(parent)
    for i in range(len(list)):
        if query in list[i] and red_key not in list[i]:
            pass
        elif query in list[i] and red_key in list[i]:
            #print(len(list))
            list.pop(i)
            print("O Redundant key eliminated; {} will no longer reference {}_id".format(child,parent))
            return True
    print ("- Redundant key not found for {}".format(child))
    return False

def add_constraints(list,parent,child):
    print ("add constraints:")
    old = 'ALTER TABLE {} ADD CONSTRAINT'.format(parent)
    key = 'FOREIGN KEY ('
    new = 'ALTER TABLE {} ADD CONSTRAINT'.format(child)    
    for i in range(len(list)):
        if old in list[i] and key in list[i]:
            new_child = list[i].replace(parent,child)
            #print ('- {} foreign key found at {}'.format(parent,i))
            if new_child not in list:
                list.append(list[i].replace(parent,child))
                print ('O copied {} to end of list'.format(i))
            #else:
                #print ('- Already exists in query list'.format(i))
        #elif new in list[i] and key in list[i]:
        #    pass
            # print ('- exists in {}'.format(i))
        #else:
        #    pass

print (len(query_list))
for i in faa_pairs:
    add_inheritance(query_list,i[0],i[1])
    remove_redundant_columns(query_list,i[0],i[1])
    remove_redundant_keys(query_list,i[0],i[1])
    add_constraints(query_list,i[0],i[1])
    print ("----end of loop----")
print (len(query_list))

outputfile = open("/Users/johncarmack/Coding/vegifyapp/vegify/devscripts/vegify_create_w_inheritance.sql",'w','utf-8-sig')
for i in query_list:
    outputfile.write(i)
outputfile.write('\n\n--End of file.')
outputfile.close()