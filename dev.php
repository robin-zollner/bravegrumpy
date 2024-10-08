<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="BraveGrumpy Content">
        <meta name="author" content="Brave Grumpy Content">
        <meta name="keywords" content="Art, Writing, Photography, Personal Website">
        <title>Dev BraveGrumpy Homepage</title>
        <link rel="stylesheet" href="stylesheets/styles.css">
        <link rel="icon" href="assets/images/BG_logo.png">
    </head>
    <body>
        <header class="row col-s-12 col-m-12 col-l-12 header row">
            <div class="col-m-4"></div>
            <div class="col-m-4 title">
                <h1>Welcome to the Experimental Homepage</h1>
                <p><span class="subtitle">
                    <?php echo "PHP Edition"; ?>
                </span></p>
            </div>
            <!--p>Go check out the <a href="dev.php">PHP Edition</a></p-->
        </header>
        <main class="row">
            <section class="col-s-12 col-m-12 navbar">
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
                <script type="text/javascript">
                    console.log("something happened");
                    document.write("This is some basic javascript");
                </script>
            </section>
            <section>
                <h2>Progresively adding some react</h2>
                <div id="app"></div>
                <article>
                    <div>
                        <p>Above, I placed the following:</p>
                        <pre>
    &lt;?php
        echo "This was created inside a php tag";
    ?&gt;
                        </pre>
                    </div>
                    <p>It did not render. This is because the <code>.php</code> file suffix is necessary, and does not exist here. This is true unless I can figure out how to tell the server to treat a <code>.html</code> file as php.</p>
                    <p>This was me trying to figure out if php works when inside of an <code>.html</code> file. </p>
                    <p>I do not feel like doing that.</p>
                    <p>An exact copy of this page exists as a <code>.php</code> file. This is to show where PHP does and does not work. </p>
                </article>
            </section>
            <section>
                <p>This is some content change that I'm adding so that I can do approprate testing on mergify. 
                    I'm placing it here because this file, dev.html is hidden in the staging-content and main branches.
                </p>
                <p>Another arbitrary change for mergify</p>
            </section>
        </main>
        <div class="row col-s-12 footer">
            <footer>This is the footer</footer>
        </div>
    </body>
</html>