document.getElementById('questionForm').addEventListener('submit', function(e) {
    const confirmation = confirm('هل أنت متأكد أنك تريد إرسال السؤال؟');
    if (!confirmation) {
        e.preventDefault();
    }
});