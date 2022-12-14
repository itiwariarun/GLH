(function(b){
    b.addEventListener('load', function(){
        const bt1_left = document.getElementById('bt1-left'),

                bt1_right = document.getElementById('bt1-right'),
                content1 = document.getElementById('con1');
        const content1_width = content1.scrollWidth;
        let content1_left = content1.scrollLeft;
        bt1_right.addEventListener('click', () => {
            content1_left += 100;
            if (content1_left >= content1_width) { content1_left = content1_width; }
            content1.scrollLeft = content1_left;
        });
        bt1_left.addEventListener('click', () => {
            content1_left -= 100;
            if (content1_left <= 0) {
                content1_left = 0;
            }
            content1.scrollLeft = content1_left;
        });
    });
})(window);