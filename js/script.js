    document.getElementById('jenis_kamar').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const price = selectedOption.getAttribute('data-price');
    document.getElementById('harga').value = price ? new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(price) : '';
    });

    // dari id
    const hitungButton = document.getElementById('hitungTotal');
    const durasiInput = document.querySelector('input[name="durasi"]');
    const hargaInput = document.getElementById('harga');
    const totalInput = document.querySelector('input[name="total"]');
    const sarapanCheckbox = document.getElementById('flexCheckDefault');

    hitungButton.addEventListener('click', function() {
        let harga = hargaInput.value.replace(/[Rp\s.]/g, '').replace(',00', '');
        let durasi = durasiInput.value;

        if (harga && durasi) {
            // ini hitung total
            let baseTotal = parseInt(harga) * parseInt(durasi);
            
            // kalo sarapan dipilih, tambahkan harga sarapan ke total
            if (sarapanCheckbox.checked) {
                baseTotal += 80000 * parseInt(durasi); 
            }

            // diskon 10% kalo durasi lebih 3 hari
            if (parseInt(durasi) > 3) {
                let discount = baseTotal * 0.1;
                baseTotal = baseTotal - discount;
            }

            // format total
            totalInput.value = new Intl.NumberFormat('id-ID', { 
                style: 'currency', 
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(baseTotal);
        } else {
            totalInput.value = '';
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
    