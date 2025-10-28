const mahasiswaData = [
  {
    nama: "Fahriandy Adithia",
    nim: "",
    prodi: "Teknik Informatika",
    semester: "3",
    email: ""
  }
];

const form = document.getElementById('mahasiswaForm');
const tableBody = document.querySelector('#mahasiswaTable tbody');
const jumlahDataEl = document.getElementById('jumlahData');

function renderTable() {
  tableBody.innerHTML = '';
  mahasiswaData.forEach((mhs, idx) => {
    const tr = document.createElement('tr');

    const tdNo = document.createElement('td');
    tdNo.textContent = idx + 1;
    tr.appendChild(tdNo);

    const tdNama = document.createElement('td');
    tdNama.textContent = mhs.nama || '-';
    tr.appendChild(tdNama);

    const tdInfo = document.createElement('td');
    const pProdi = document.createElement('div');
    pProdi.className = 'info-line';
    pProdi.textContent = 'Prodi: ' + (mhs.prodi || '-');

    const pSmt = document.createElement('div');
    pSmt.className = 'info-line';
    pSmt.textContent = 'Semester: ' + (mhs.semester || '-');

    tdInfo.appendChild(pProdi);
    tdInfo.appendChild(pSmt);
    tr.appendChild(tdInfo);

    tableBody.appendChild(tr);
  });

  jumlahDataEl.textContent = mahasiswaData.length;
}

renderTable();

form.addEventListener('submit', function (e) {
  e.preventDefault();

  const nama = document.getElementById('nama').value.trim();
  const nim = document.getElementById('nim').value.trim();
  const semester = document.getElementById('semester').value.trim();
  const prodi = document.getElementById('prodi').value;
  const email = document.getElementById('email').value.trim();

  const newMhs = { nama, nim, prodi, semester, email };

  console.log('Data mahasiswa terkirim:', newMhs);

  mahasiswaData.push(newMhs);

  renderTable();

  form.reset();

  document.getElementById('nama').focus();
});
