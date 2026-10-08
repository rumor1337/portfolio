const ticker = document.querySelector('.commitTicker');

if (ticker) {
    const pixelsPerSecond = 480;
    let previousTime = null;

    function scrollTicker(timestamp) {
        if (!previousTime) previousTime = timestamp;

        const elapsed = (timestamp - previousTime) / 1000;
        previousTime = timestamp;

        ticker.scrollLeft += pixelsPerSecond * elapsed;

        if (ticker.scrollLeft >= ticker.scrollWidth - ticker.clientWidth) {
            ticker.scrollLeft = 0;
        }

        requestAnimationFrame(scrollTicker);
    }

    requestAnimationFrame(scrollTicker);
}
