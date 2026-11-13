<!DOCTYPE html>
<html>
<head>
    <title>Choose Frame</title>
</head>
<body>

    <h1>Photobooth</h1>
    <h2>Choose Your Frame</h2>

    <p>Select one frame for your photo.</p>

    <form>
        <input type="radio" id="frame1" name="frame" value="Frame 1" checked>
        <label for="frame1">Frame 1</label>
        <br>

        <input type="radio" id="frame2" name="frame" value="Frame 2">
        <label for="frame2">Frame 2</label>
        <br>

        <input type="radio" id="frame3" name="frame" value="Frame 3">
        <label for="frame3">Frame 3</label>
        <br><br>

        <button type="button" onclick="chooseFrame()">Continue</button>
    </form>

    <script>
        function chooseFrame() {
            const selectedFrame = document.querySelector('input[name="frame"]:checked');

            alert("You selected: " + selectedFrame.value);
        }
    </script>

</body>
</html>