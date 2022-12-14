(function(a){
    a.addEventListener('load', function(){
        const bt_left = document.getElementById('bt-left'),

                bt_right = document.getElementById('bt-right'),
                content = document.getElementById('conn');
        const content_width = content.scrollWidth;
        let content_left = content.scrollLeft;
        bt_right.addEventListener('click', () => {
            content_left += 100;
            if (content_left >= content_width) { content_left = content_width; }
            content.scrollLeft = content_left;
        });
        bt_left.addEventListener('click', () => {
            content_left -= 100;
            if (content_left <= 0) {
                content_left = 0;
            }
            content.scrollLeft = content_left;
        });
    });
})(window);




