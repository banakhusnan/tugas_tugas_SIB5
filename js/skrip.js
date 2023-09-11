function dataPerson() {
  let forms = document.getElementById("frm");
  let nama = forms.nama.value;
  let pekerjaan = forms.pekerjaan.value;
  let hobby = forms.hobby.value;
  let data = `input data
    <br> Nama : ${nama}
    <br> Pekerjaan : ${pekerjaan}
    <br> Hobby : ${hobby}
    `;

  document.getElementById("hasil").innerHTML = data;
}
