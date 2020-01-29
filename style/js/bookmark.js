function getBookmarks()
{
    fetch('/lanaya/api/bookmarks', { credentials: 'include'})
        .then(result => result.json())
        .then(data => {
            displayBookmarks(data.bookmarks);
        });
}

function addBookmark(productId)
{
    fetch('/lanaya/api/bookmarks/add/' + productId, { credentials: 'include'})
        .then(result => result.json())
        .then(data => {
            if(data.error === 0)
            {
                getBookmarks();
            }
        });
}

function clearBookmarks()
{
    fetch('/lanaya/api/bookmarks/clear/', { credentials: 'include'})
        .then(result => result.json())
        .then(data => {
            if(data.error === 0)
            {
                getBookmarks();
            }
        });
}

function displayBookmarks(bookmarks)
{
    const bookmarksDiv = document.querySelector('.bookmarks');
    bookmarksDiv.innerHTML = '';

    if(bookmarks.length === 0)
    {
        bookmarksDiv.innerHTML = '<span id="bookmark-span">No Items</span>';
        return;
    }

    for(bookmark of bookmarks)
    {
        const bookmarkLink = document.createElement('a');
        bookmarkLink.style.display = 'block';
        bookmarkLink.innerHTML = bookmark.title;
        bookmarkLink.href = '/lanaya/product/' + bookmark.id;

        bookmarksDiv.appendChild(bookmarkLink);
    }
}

addEventListener('load', getBookmarks);


