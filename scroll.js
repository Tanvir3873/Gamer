function smoothScrollToBottom() {
    const scrollHeight = document.documentElement.scrollHeight;
    const scrollStep = scrollHeight / 50;
    let scrollPosition = 0;

    const scrollInterval = setInterval(() => {
        if (scrollPosition < scrollHeight - window.innerHeight) {
            window.scrollBy(0, scrollStep);
            scrollPosition += scrollStep;
        } else {
            clearInterval(scrollInterval);
        }
    }, 50);
}