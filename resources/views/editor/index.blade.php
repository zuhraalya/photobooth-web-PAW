
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Photobooth - Photo Preview</title>
</head>
<body>

    <main class="editor-container">

        <!-- Bagian Preview Foto -->
        <section class="preview-section">

            <h1>preview</h1>

            <div class="preview-card">

                <div class="preview-header">
                    <p>See Your Photo</p>
                </div>

                <div class="photo-preview">
                    <!-- Foto hasil pengambilan akan ditampilkan di sini -->
                </div>

            </div>

            <button type="button" class="retake-button">
                Retake
            </button>

        </section>


        <!-- Bagian Note -->
        <section class="note-section">

            <div class="note-heading">
                <h2>Wanna add a note?</h2>
                <p>Special to someone</p>
            </div>

            <div class="note-input-container">

                <textarea
                    id="photo-note"
                    maxlength="50"
                    placeholder="Write here..."
                ></textarea>

                <p class="character-counter">
                    0/50 character
                </p>

            </div>

            <button type="button" class="finish-button">
                Finish
            </button>

        </section>

    </main>

</body>
</html>
