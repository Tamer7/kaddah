document.addEventListener('DOMContentLoaded', function () {
    const postItems = document.querySelectorAll('.post-item');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    let currentIndex = 0;

    function showPosts() {
        postItems.forEach((item, index) => {
            item.classList.toggle('hidden', !(index >= currentIndex && index < currentIndex + 3));
        });

        // Toggle passive class for navigation buttons
        prevButton.classList.toggle('passive', currentIndex === 0);
        nextButton.classList.toggle('passive', currentIndex + 3 >= postItems.length);
    }

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex -= 3;
            showPosts();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentIndex + 3 < postItems.length) {
            currentIndex += 3;
            showPosts();
        }
    });

    // Initially show the first three posts
    showPosts();
});
