let produkInput = document.getElementById("produk");
let p1 = { nama: "TV" };
let p2 = { nama: "AC" };
let p3 = { nama: "Kulkas" };

let produk = [p1, p2, p3];

for (let i = 0; i < produk.length; i++) {
  let namaProduk = produk[i].nama;
  switch (namaProduk) {
    case "TV":
      produk[i].harga = 2000000;
      break;
    case "AC":
      produk[i].harga = 3000000;
      break;
    case "Kulkas":
      produk[i].harga = 4000000;
      break;

    default:
      produk[i] = 0;
      break;
  }
  let option = document.createElement("option");
  option.value = produk[i].nama;
  option.textContent = produk[i].nama + ` (harga Rp.${produk[i].harga})`;

  produkInput.appendChild(option);
}

function pembelian() {
  const form = document.getElementById("form");
  const namaPelanggan = form.nama.value;
  const prod = form.produk.value;
  const jumlah = form.jumlah.value;

  let hargaSatuan;
  for (const p of produk) {
    switch (prod) {
      case "TV":
        hargaSatuan = p.harga;
        break;
      case "AC":
        hargaSatuan = p.harga;
        break;
      case "Kulkas":
        hargaSatuan = p.harga;
        break;

      default:
        break;
    }
  }

  let hargaKotor;
  switch (prod) {
    case "TV":
      hargaKotor = hargaSatuan * jumlah;
      break;
    case "AC":
      hargaKotor = hargaSatuan * jumlah;
      break;
    case "Kulkas":
      hargaKotor = hargaSatuan * jumlah;
      break;

    default:
      break;
  }

  let diskon;
  if (prod === "Kulkas" && jumlah >= 3) diskon = 0.3;
  else if (prod === "AC" && jumlah >= 3) diskon = 0.3;
  else diskon = 0.1;

  let ppn = 0.1 * (hargaKotor - diskon * hargaKotor);
  let hargaBayar = hargaKotor - diskon * hargaKotor + ppn;

  alert(`
  Nama Pelanggan:
  ${namaPelanggan}

  Produk:
  ${prod}

  Harga Satuan:
  Rp.${hargaSatuan}

  Jumlah Barang:
  ${jumlah}

  Harga Kotor:
  Rp.${hargaKotor}

  Diskon:
  ${diskon * 100}% (Rp.${diskon * hargaKotor})

  PPN:
  10% (Rp.${ppn})

  Harga Bayar:
  Rp.${hargaBayar}
  `);
}
