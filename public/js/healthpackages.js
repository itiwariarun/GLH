const tabElements = [{
    id: 'featured',
    triggerEl: document.querySelector('#featured-tab-example'),
    targetEl: document.querySelector('#featured-example')
  },
  {
    id: 'mens',
    triggerEl: document.querySelector('#mens-tab-example'),
    targetEl: document.querySelector('#mens-example')
  },
  {
    id: 'womens',
    triggerEl: document.querySelector('#womens-tab-example'),
    targetEl: document.querySelector('#womens-example')
  },
];

// options with default values
const options = {
  defaultTabId: 'mens',
  activeClasses: 'text-blue-600  hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500',
  inactiveClasses: 'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',
  onShow: () => {
    console.log('tab is shown');
  }
};