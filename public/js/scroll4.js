(function(e){
    e.addEventListener('load', function(){
        const bt4_left = document.getElementById('bt4-left'),

                bt4_right = document.getElementById('bt4-right'),
                content4 = document.getElementById('con4');
        const content4_width = content4.scrollWidth;
        let content4_left = content4.scrollLeft;
        bt4_right.addEventListener('click', () => {
            content4_left += 100;
            if (content4_left >= content4_width) { content4_left = content4_width; }
            content4.scrollLeft = content4_left;
        });
        bt4_left.addEventListener('click', () => {
            content4_left -= 100;
            if (content4_left <= 0) {
                content4_left = 0;
            }
            content4.scrollLeft = content4_left;
        });
    });
})(window);