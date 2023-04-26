


<!-- Include the polyfill -->
<script src="web-animations.min.js"></script>

<!-- Set up a target to animate -->
<div class="pulse" style="width: 1000px;">Hello world!</div>

<!-- Animate! -->
<script>
    var elem = document.querySelector('.pulse');
    var animation = elem.animate({
        opacity: [3.2, 5],
        transform: ['scale(0.5)', 'scale(1)'],
    }, {
        direction: 'alternate',
        duration: 1000,
        iterations: Infinity,
    });
</script>