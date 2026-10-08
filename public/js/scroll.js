const ticker = document.querySelector('.commitTicker');

// nevermind actually, ai might've cooked.. good implementation?
// I don't see a point in rewriting it, fixed one bug where it never reset, but yeah I guess?

if (ticker) {
    const pixelsPerSecond = 240;
    let previousTime = null;

    function scrollTicker(timestamp) {
        if (!previousTime) previousTime = timestamp;

        const elapsed = (timestamp - previousTime) / 1000;
        previousTime = timestamp;

        ticker.scrollLeft += pixelsPerSecond * elapsed;

        if (Math.round(ticker.scrollLeft) >= ticker.scrollWidth - ticker.clientWidth) {
            ticker.scrollLeft = 0;
        }

        requestAnimationFrame(scrollTicker);
    }

    requestAnimationFrame(scrollTicker);
}
