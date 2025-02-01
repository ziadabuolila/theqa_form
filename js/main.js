let alert = document.querySelector('#alert');
function copyToClipboard(id) {
    let text = document.getElementById(id).innerText;
    // الحصول على النص من العنصر المحدد
    var copyText = text.trim();

    // إنشاء عنصر مؤقت لنسخ النص
    var tempInput = document.createElement('input');
    tempInput.value = copyText;
    document.body.appendChild(tempInput);

    // تحديد النص ونسخه إلى الحافظة
    tempInput.select();
    document.execCommand('copy');

    // إزالة العنصر المؤقت
    document.body.removeChild(tempInput);

    // إظهار رسالة النسخ
    alert.classList.remove('d-none');
    alert.classList.add('d-block');
    alert.innerText = 'تم نسخ النص';
    setTimeout(() => {
        alert.classList.remove('d-block');
        alert.classList.add('d-none');
    }, 3000);
}

