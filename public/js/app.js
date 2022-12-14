// {/* <style>
// .child {
//   width: 100px;
//   white-space: wrap;
//   overflow-x: scroll;
// }
// </style>

// <script>
// (function(w){
//     w.addEventListener('load', function(){
//         const   btn_left = document.getElementById('btn-left'),
//                 btn_right = document.getElementById('btn-right'),
//                 content = document.getElementById('con');
//         const content_scroll_width = content.scrollWidth;
//         let content_scoll_left = content.scrollLeft;
//         btn_right.addEventListener('click', () => {
//             content_scoll_left += 100;
//             if (content_scoll_left >= content_scroll_width) { content_scoll_left = content_scroll_width; }
//             content.scrollLeft = content_scoll_left;
//         });
//         btn_left.addEventListener('click', () => {
//             content_scoll_left -= 100;
//             if (content_scoll_left <= 0) {
//                 content_scoll_left = 0;
//             }
//             content.scrollLeft = content_scoll_left;
//         });
//     });
// })(window);
// </script>

// <div class="parent">
//      <div class="child w-full" id="con">
//                 Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum.
//                 Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum.
//                 Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum.
//                 Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum.
//                 Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum.
//                 Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum.
//                 Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum.
//                 Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum.
//                 Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum. Lorem Ipsum.
//     </div>
// </div>
// <button id="btn-left">Left scroll</button>
// <button id="btn-right">Right scroll</button> */}


//progressive to show 100%
// const scrollProgress = () => {
//     return {
//       init() {
//         window.addEventListener('scroll', () => {
//           let winScroll = document.body.scrollTop || document.documentElement
//             .scrollTop
//           let height = document.documentElement.scrollHeight - document
//             .documentElement.clientHeight
//           this.percent = Math.round((winScroll / height) * 100)
//         })
//       },
//       circumference: 30 * 2 * Math.PI,
//       percent: 0,
//     }
//   }

  //lab page slider know more top

