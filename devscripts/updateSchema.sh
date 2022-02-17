if [ -f ~/Downloads/vegify_create.sql ]; then 
    mv ~/Downloads/vegify_create.sql ~/Coding/vegifyapp/vegify/devscripts/vegify_create.sql
fi
if [ -f /Users/johncarmack/Coding/vegifyapp/vegify/devscripts/vegify_create_w_inheritance.sql ]; then 
    rm -rf /Users/johncarmack/Coding/vegifyapp/vegify/devscripts/vegify_create_w_inheritance.sql
fi
python3 ~/Coding/vegifyapp/vegify/devscripts/convert_inherit_vegify.py devscripts/vegify_create.sql   
psql -d vegify -a -f ~/Coding/vegifyapp/vegify/devscripts/delete_old_schema.sql
psql -d vegify -a -f ~/Coding/vegifyapp/vegify/devscripts/vegify_create_w_inheritance.sql
npx prisma db pull
npx prisma generate
npx prisma migrate dev
# node --require esbuild-register /Users/johncarmack/Coding/vegifyapp/vegify/prisma/seed.ts