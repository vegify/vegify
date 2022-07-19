import { mount } from '@vue/test-utils';
import VegifySearch from '../VegifySearch.vue';
import { describe, it, expect } from 'vitest';

describe('VegifySearch.vue', () => {
    it('shows 0 results when there are 0 results', async () => {
        const wrapper = mount(VegifySearch, {
            props: {
                isSubPage: true,
            },
        });

        const searchField = wrapper.find('input');

        await searchField.setValue('test');

        console.log();

        expect(wrapper.find('[data-testid="search-result-count"]').text()).toBe('0');
    });
});
