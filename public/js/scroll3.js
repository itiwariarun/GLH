(function(d){
    d.addEventListener('load', function(){
        const bt3_left = document.getElementById('bt3-left'),

                bt3_right = document.getElementById('bt3-right'),
                content3 = document.getElementById('con3');
        const content3_width = content3.scrollWidth;
        let content3_left = content3.scrollLeft;
        bt3_right.addEventListener('click', () => {
            content3_left += 100;
            if (content3_left >= content3_width) { content3_left = content3_width; }
            content3.scrollLeft = content3_left;
        });
        bt3_left.addEventListener('click', () => {
            content3_left -= 100;
            if (content3_left <= 0) {
                content3_left = 0;
            }
            content3.scrollLeft = content3_left;
        });
    });
})(window);