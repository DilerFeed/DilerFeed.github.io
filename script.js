const btn = document.getElementById('beautify-btn');
btn.addEventListener('click', function() {
    btn.style.transition = 'transform 0.6s cubic-bezier(.68,-0.55,.27,1.55), box-shadow 0.6s';
    btn.style.transform = 'scale(2.5) rotate(360deg)';
    btn.style.boxShadow = '0 0 200px 80px #fff, 0 0 400px 120px #43cea2';
    btn.style.opacity = '0.2';
    setTimeout(() => {
        document.getElementById('ugly-interface').style.display = 'none';
        document.getElementById('beautiful-interface').style.display = 'flex';
        document.body.classList.remove('ugly');
        document.body.classList.add('beautiful');
    }, 600);
});
