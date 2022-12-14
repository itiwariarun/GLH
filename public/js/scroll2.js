(function(c){
    c.addEventListener('load', function(){
        const bt2_left = document.getElementById('bt2-left'),

                bt2_right = document.getElementById('bt2-right'),
                content2 = document.getElementById('con2');
        const content2_width = content2.scrollWidth;
        let content2_left = content2.scrollLeft;
        bt2_right.addEventListener('click', () => {
            content2_left += 100;
            if (content2_left >= content2_width) { content2_left = content2_width; }
            content2.scrollLeft = content2_left;
        });
        bt2_left.addEventListener('click', () => {
            content2_left -= 100;
            if (content2_left <= 0) {
                content2_left = 0;
            }
            content2.scrollLeft = content2_left;
        });
    });
})(window);