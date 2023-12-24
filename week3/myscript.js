function copyToClipboard() {
    const link = 'https://socitcloud.apc.edu.ph/~mescalambre/lab2/week3/';
    const el = document.createElement('textarea');
    el.value = link;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    alert('Link copied to clipboard!');
   }  