<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library Catalog</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="header-left">
            <h1>iAcademy: Hex Grid</h1>
        </div>
        <div class="header-right">
            <a href="#">Browse</a>
            <a href="#">Login</a>
        </div>
    </header>
    
    <nav>
        <div class="nav-left">
            <h2>General Catalog</h2>
        </div>
        <div class="nav-right">
            <a href="#" class="filters">Filters</a>
            <div class="sort">
                <span>Sort</span>
                <select>
                    <option value="title">Title</option>
                    <option value="author">Author</option>
                    <option value="date">Release Date</option>
                </select>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button type="button">🔍</button>
            </div>
        </div>
    </nav>
    
    <main>
        <section class="book-list">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Release Date</th>
                        <th>Available</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="{{ asset('images/bookmark.png') }}" alt="Bookmark"></td>
                        <td>Echoes of Eternity</td>
                        <td>Samantha Rivers</td>
                        <td>May 15, 2023</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('images/bookmark.png') }}" alt="Bookmark"></td>
                        <td>Whispers in the Dark</td>
                        <td>Marcus Blackwood</td>
                        <td>October 7, 2022</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('images/bookmark.png') }}" alt="Bookmark"></td>
                        <td>Beyond the Horizon</td>
                        <td>Isabella Stone</td>
                        <td>March 28, 2024</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('images/bookmark.png') }}" alt="Bookmark"></td>
                        <td>The Silent Symphony</td>
                        <td>Nathanial Greene</td>
                        <td>September 12, 2023</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('images/bookmark.png') }}" alt="Bookmark"></td>
                        <td>Fragments of Fate</td>
                        <td>Evelyn Harper</td>
                        <td>November 3, 2022</td>
                        <td>Yes</td>
                    </tr>
                    <!-- Add more book entries here -->
                </tbody>
            </table>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 iAcademy Inc.</p>
    </footer>
</body>
</html>
