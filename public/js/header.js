const tabElements = [{
    id: 'find',
    triggerEl: document.querySelector('#find-tab-example'),
    targetEl: document.querySelector('#find-example')
  },
  {
    id: 'video',
    triggerEl: document.querySelector('#video-tab-example'),
    targetEl: document.querySelector('#video-example')
  },
  {
    id: 'med',
    triggerEl: document.querySelector('#med-tab-example'),
    targetEl: document.querySelector('#med-example')
    },
   {
    id: 'lab',
    triggerEl: document.querySelector('#lab-tab-example'),
    targetEl: document.querySelector('#lab-example')
  }, {
    id: 'surgery',
    triggerEl: document.querySelector('#surgery-tab-example'),
    targetEl: document.querySelector('#surgery-example')
  },
];

// options with default values
const options = {
  defaultTabId: 'video',
  activeClasses: 'text-blue-600  bg-stone-300 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500',
  inactiveClasses: 'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',

};