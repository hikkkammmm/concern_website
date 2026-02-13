// admin/assets/js/admin.js
document.addEventListener('DOMContentLoaded', () => {
  const tableBody = document.getElementById('portfolio-table-body');
  const modal = document.getElementById('modal');
  const modalTitle = document.getElementById('modal-title');
  const form = document.getElementById('portfolio-form');
  const btnAdd = document.getElementById('btn-add');
  const btnCancel = document.getElementById('btn-cancel');

  let portfolioData = JSON.parse(localStorage.getItem('concernPortfolio')) || [
    {
      id: 1,
      title: "Dashboard Analitik",
      description: "Sistem monitoring real-time untuk bisnis",
      image: "https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=800",
      tags: ["React", "Node.js", "Chart.js"]
    },
    {
      id: 2,
      title: "Aplikasi Manajemen Toko",
      description: "App cross-platform untuk retail",
      image: "https://images.unsplash.com/photo-1551650975-60cb5c8b0b7e?auto=format&fit=crop&q=80&w=800",
      tags: ["Flutter", "Firebase"]
    }
  ];

  function saveData() {
    localStorage.setItem('concernPortfolio', JSON.stringify(portfolioData));
    renderTable();
  }

  function renderTable() {
    tableBody.innerHTML = '';
    portfolioData.forEach(item => {
      const row = document.createElement('tr');
      row.className = 'border-t border-gray-800 hover:bg-gray-800/50';
      row.innerHTML = `
        <td class="px-6 py-4">
          <img src="${item.image}" alt="${item.title}" class="w-16 h-12 object-cover rounded">
        </td>
        <td class="px-6 py-4 font-medium">${item.title}</td>
        <td class="px-6 py-4 text-gray-400">${item.description.substring(0, 80)}${item.description.length > 80 ? '...' : ''}</td>
        <td class="px-6 py-4">
          ${item.tags.map(tag => `<span class="px-2 py-1 bg-gray-800 rounded-full text-xs mr-1">${tag}</span>`).join('')}
        </td>
        <td class="px-6 py-4">
          <button class="text-indigo-400 hover:text-indigo-300 mr-3 edit-btn" data-id="${item.id}">Edit</button>
          <button class="text-red-400 hover:text-red-300 delete-btn" data-id="${item.id}">Hapus</button>
        </td>
      `;
      tableBody.appendChild(row);
    });

    // Event listener untuk edit & delete
    document.querySelectorAll('.edit-btn').forEach(btn => {
      btn.addEventListener('click', () => editItem(btn.dataset.id));
    });
    document.querySelectorAll('.delete-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        if (confirm('Yakin ingin menghapus project ini?')) {
          deleteItem(btn.dataset.id);
        }
      });
    });
  }

  function openModal(isEdit = false, item = null) {
    modal.classList.remove('hidden');
    if (isEdit && item) {
      modalTitle.textContent = 'Edit Project';
      document.getElementById('edit-id').value = item.id;
      document.getElementById('title').value = item.title;
      document.getElementById('description').value = item.description;
      document.getElementById('image').value = item.image;
      document.getElementById('tags').value = item.tags.join(', ');
    } else {
      modalTitle.textContent = 'Tambah Project Baru';
      form.reset();
      document.getElementById('edit-id').value = '';
    }
  }

  function closeModal() {
    modal.classList.add('hidden');
  }

  function saveForm(e) {
    e.preventDefault();
    const id = document.getElementById('edit-id').value;
    const newItem = {
      id: id ? parseInt(id) : Date.now(),
      title: document.getElementById('title').value,
      description: document.getElementById('description').value,
      image: document.getElementById('image').value,
      tags: document.getElementById('tags').value.split(',').map(t => t.trim()).filter(t => t)
    };

    if (id) {
      // Edit
      const index = portfolioData.findIndex(p => p.id === parseInt(id));
      if (index !== -1) portfolioData[index] = newItem;
    } else {
      // Tambah baru
      portfolioData.push(newItem);
    }

    saveData();
    closeModal();
  }

  function editItem(id) {
    const item = portfolioData.find(p => p.id === parseInt(id));
    if (item) openModal(true, item);
  }

  function deleteItem(id) {
    portfolioData = portfolioData.filter(p => p.id !== parseInt(id));
    saveData();
  }

  // Event listeners
  btnAdd.addEventListener('click', () => openModal(false));
  btnCancel.addEventListener('click', closeModal);
  form.addEventListener('submit', saveForm);

  // Render awal
  renderTable();
});

// assets/js/admin.js

document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('crud-modal');
  const titleEl = document.getElementById('modal-title');
  const form = document.getElementById('crud-form');
  const typeInput = document.getElementById('crud-type');
  const actionInput = document.getElementById('crud-action');
  const idInput = document.getElementById('crud-id');
  const closeBtn = document.getElementById('modal-close');
  const cancelBtn = document.getElementById('modal-cancel');

  // Fungsi buka modal
  function openModal(type, action = 'add', data = {}) {
    typeInput.value = type;
    actionInput.value = action;

    // Reset form
    form.reset();
    document.querySelectorAll('#portfolio-fields, #news-fields, #tech-fields').forEach(el => el.classList.add('hidden'));

    if (type === 'portfolio') {
      titleEl.textContent = action === 'add' ? 'Tambah Project Baru' : 'Edit Project';
      document.getElementById('portfolio-fields').classList.remove('hidden');
      if (action === 'edit') {
        document.getElementById('p-title').value = data.title || '';
        document.getElementById('p-description').value = data.description || '';
        document.getElementById('p-image').value = data.imageUrl || '';
        document.getElementById('p-tags').value = (data.tags || []).join(', ');
        // Preview gambar
        if (data.imageUrl) {
          document.getElementById('p-preview').classList.remove('hidden');
          document.getElementById('p-preview-img').src = data.imageUrl;
        }
      }
    } else if (type === 'news') {
      titleEl.textContent = action === 'add' ? 'Tambah Berita Baru' : 'Edit Berita';
      document.getElementById('news-fields').classList.remove('hidden');
      if (action === 'edit') {
        // Isi field news...
      }
    } else if (type === 'techstack') {
      titleEl.textContent = action === 'add' ? 'Tambah Teknologi Baru' : 'Edit Teknologi';
      document.getElementById('tech-fields').classList.remove('hidden');
      if (action === 'edit') {
        // Isi field tech...
      }
    }

    modal.classList.remove('hidden');
  }

  // Tutup modal
  closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
  cancelBtn.addEventListener('click', () => modal.classList.add('hidden'));
  modal.addEventListener('click', e => {
    if (e.target === modal) modal.classList.add('hidden');
  });

  // Contoh: tombol tambah portfolio di halaman
  document.getElementById('btn-add-portfolio')?.addEventListener('click', () => {
    openModal('portfolio', 'add');
  });

  // Submit form (nanti connect ke backend)
  form.addEventListener('submit', e => {
    e.preventDefault();
    alert('Data disimpan! (Implementasi backend nanti ya)');
    modal.classList.add('hidden');
  });

  // Preview gambar portfolio
  document.getElementById('p-image')?.addEventListener('input', e => {
    const url = e.target.value;
    if (url) {
      document.getElementById('p-preview').classList.remove('hidden');
      document.getElementById('p-preview-img').src = url;
    } else {
      document.getElementById('p-preview').classList.add('hidden');
    }
  });
});