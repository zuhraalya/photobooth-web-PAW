
document.addEventListener('DOMContentLoaded', function () {
    const noteInput = document.getElementById('photo-note');
    const characterCounter = document.querySelector('.character-counter');

    if (!noteInput || !characterCounter) return;

    function updateCharacterCounter() {
        const currentLength = noteInput.value.length;
        characterCounter.textContent = `${currentLength}/50 character`;
    }

    noteInput.addEventListener('input', updateCharacterCounter);

    updateCharacterCounter();
});
