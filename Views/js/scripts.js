// JavaScript for bookmarking a page
function bookmarkPage(pageUrl, pageTitle) {
    fetch('bookmark.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ page_url: pageUrl, page_title: pageTitle })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Page bookmarked:', data);
        // Handle success (e.g., show success message)
    })
    .catch(error => {
        console.error('Error bookmarking page:', error);
        // Handle error (e.g., show error message)
    });
}
