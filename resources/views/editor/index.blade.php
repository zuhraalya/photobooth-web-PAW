
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photobooth - Photo Editor</title>
</head>
<body>

    <main class="editor-container">

        <!-- Bagian Preview -->
        <section class="preview-section">

            <h1>preview</h1>

            <div class="preview-header">
                <p>See Your Photo</p>
            </div>

            <div class="photo-preview">
                <!-- Area untuk menampilkan foto -->
            </div>

            <button type="button" class="preview-button">
                Open the booth
            </button>

        </section>


        <!-- Bagian Note -->
        <section class="note-section">

            <div class="note-heading">
                <h2>Add a note to your photos</h2>
                <p>Special one to someone</p>
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

            <button type="button" class="note-button">
                Open the booth
            </button>

        </section>

    </main>

</body>
</html>
