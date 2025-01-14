document.getElementById('jenis_kamar').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const price = selectedOption.getAttribute('data-price');
    document.getElementById('harga').value = price ? new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(price) : '';
});

const hitungButton = document.getElementById('hitungTotal');
const durasiInput = document.querySelector('input[name="durasi"]');
const hargaInput = document.getElementById('harga');
const totalInput = document.querySelector('input[name="total"]');
const sarapanCheckbox = document.getElementById('flexCheckDefault');
const diskonInput = document.querySelector('input[name="diskon"]');

hitungButton.addEventListener('click', function() {
    let harga = hargaInput.value.replace(/[Rp\s.]/g, '').replace(',00', '');
    let durasi = durasiInput.value;

    if (harga && durasi) {
        // Calculate base total
        let baseTotal = parseInt(harga) * parseInt(durasi);
        
        // Add breakfast cost if selected
        if (sarapanCheckbox.checked) {
            baseTotal += 80000 * parseInt(durasi);
        }

        // Set discount value
        let discountPercent = 0;
        if (parseInt(durasi) > 3) {
            discountPercent = 10;
            let discount = baseTotal * 0.1;
            baseTotal = baseTotal - discount;
        }
        
        // Set discount display
        diskonInput.value = discountPercent + '%';

        // Format total
        totalInput.value = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(baseTotal);
    } else {
        totalInput.value = '';
        diskonInput.value = '0%';
    }
});


    function validateIdentitas(input) {
        const value = input.value;
        const errorDiv = document.getElementById('identitasError');
        
        //kalo lebih: !==
        if (value.length < 16) {
            errorDiv.style.display = 'block';
            input.setCustomValidity('Nomor identitas harus 16 digit');
        } else {
            errorDiv.style.display = 'none';
            input.setCustomValidity('');
        }
    }

    function validateNumber(input) {
        const value = input.value;
        const errorDiv = document.getElementById('numberError');
        
        if (isNaN(value) || value === '') {
            errorDiv.style.display = 'block';
            input.setCustomValidity('Harus diisi dengan angka');
        } else {
            errorDiv.style.display = 'none';
            input.setCustomValidity('');
        }
    }

    
    