<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="BraveGrumpy Content">
        <meta name="author" content="Brave Grumpy Content">
        <meta name="keywords" content="Art, Writing, Photography, Personal Website">
        <title>BraveGrumpy Homepage</title>
        <link rel="stylesheet" href="stylesheets/styles.css">
        <link rel="icon" href="assets/images/BG_logo.png">
    </head>
    <body>
        <?php include("navlinks.php") ?>
        <header>
            <h1>Welcome to the Experimental Homepage</h1>
            <p>PHP Edition</p>
            <p>Go check out the <a href="dev.html">HTML Edition</a></p>
        </header>
        <main>
            <section>
                <h2>Helpful Links</h2>
                <article><a href="index.html">Go back to the real, non-experimental homepage.</a></article>

                <div class="navbar"></div>
            </section>
            <section>
                <h2>About this page</h2>
                <p>This page is currently unstyled....</p>
                <p>This is because a lot of manual labor went into the styling for this <a href="index.html">main homepage</a>. Maybe I want to create new styles. Who knows. </p>
            </section>
            <section>
                <h2>Including Basic JS functionality</h2>
                <script src="script.js"></script>
            </section>
            <section>
                <h2>PHP testing/practice</h2>
                <p>This page is <code>.html</code></p>
                <article>
                    <?php
                        echo "This was created inside a php tag";
                    ?>
                </article>
                <article>
                    <div>
                        <p>Above, I placed the following:</p>
                        <pre>
    &lt;?php
        echo "This was created inside a php tag";
    ?&gt;
                        </pre>
                    </div>
                    <p>It did render. This is because the <code>.php</code> file suffix is necessary, and exists here. This is unless true I can figure out how to tell the server to treat a <code>.html</code> file as php.</p>
                    <p>I do not feel like doing that.</p>
                    <p>This was me trying to figure out if php works when inside of an <code>.html</code> file. </p>
                    <p>An exact copy of this page exists as a <code>.html</code> file. This is to show where PHP does and does not work. </p>
                </article>
            </section>
        </main>
        <footer>This is the footer</footer>
    </body>
</html>
