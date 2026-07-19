(function () {
    const stage = document.getElementById('launchStage');
    const launchBtn = document.getElementById('launchBtn');
    const countdownEl = document.getElementById('launchCountdown');
    const countdownNumber = document.getElementById('countdownNumber');
    const countdownProgress = document.getElementById('countdownProgress');
    const hero = document.querySelector('.launch-hero');

    if (!stage || !launchBtn || !countdownEl || !countdownNumber || !countdownProgress) {
        return;
    }

    const countdownSeconds = Math.max(1, Number(stage.dataset.countdown) || 5);
    const revealSeconds = Math.max(1, Number(stage.dataset.reveal) || 3);
    const redirectUrl = stage.dataset.redirect || '../index.php';

    const circumference = 2 * Math.PI * 52;
    countdownProgress.style.strokeDasharray = String(circumference);
    countdownProgress.style.strokeDashoffset = '0';

    let started = false;

    function wait(ms) {
        return new Promise(function (resolve) {
            window.setTimeout(resolve, ms);
        });
    }

    function setCountdown(value) {
        countdownNumber.textContent = String(value);
        countdownNumber.style.animation = 'none';
        // Force reflow so the pop animation restarts each tick.
        void countdownNumber.offsetWidth;
        countdownNumber.style.animation = '';

        const elapsed = countdownSeconds - value;
        countdownProgress.style.strokeDashoffset = String(
            circumference * (elapsed / countdownSeconds)
        );
    }

    async function runLaunchSequence() {
        if (started) {
            return;
        }
        started = true;

        launchBtn.disabled = true;
        stage.classList.add('is-counting');
        countdownEl.hidden = false;

        setCountdown(countdownSeconds);

        for (let second = countdownSeconds - 1; second >= 1; second -= 1) {
            await wait(1000);
            setCountdown(second);
        }

        await wait(1000);

        // Finish the ring, then open curtains.
        countdownProgress.style.strokeDashoffset = String(circumference);
        stage.classList.add('is-opening');
        if (hero) {
            hero.setAttribute('aria-hidden', 'false');
        }
        stage.classList.add('is-revealed');

        // Let curtains finish opening, then hold the hero reveal.
        await wait(1400);
        await wait(revealSeconds * 1000);

        stage.classList.add('is-redirecting');
        await wait(650);
        window.location.href = redirectUrl;
    }

    launchBtn.addEventListener('click', function () {
        runLaunchSequence().catch(function () {
            window.location.href = redirectUrl;
        });
    });
})();
