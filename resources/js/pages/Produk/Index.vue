<template>
  <div class="p-6 bg-gray-50 min-h-screen">
    <h1 class="text-3xl font-extrabold text-pink-700 mb-6 flex items-center gap-2">
      🍰 Shinta Bakery
    </h1>

    <div class="bg-white rounded-lg shadow-md p-5">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-gray-800">Daftar Produk 🍪</h2>
        <router-link
          to="/produk/create"
          class="bg-pink-600 hover:bg-pink-700 text-white px-4 py-2 rounded-lg shadow transition"
        >
          + Tambah Produk
        </router-link>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
          <thead class="bg-pink-100 text-gray-800 uppercase text-sm">
            <tr>
              <th class="p-3 text-left">Nama Produk</th>
              <th class="p-3 text-left">Harga</th>
              <th class="p-3 text-left">Stok</th>
              <th class="p-3 text-left">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="item in produk"
              :key="item.id_produk"
              class="border-t hover:bg-pink-50 transition"
            >
              <td class="p-3 font-medium">{{ item.nama_produk }}</td>
              <td class="p-3 text-gray-700">Rp {{ Number(item.harga).toLocaleString('id-ID') }}</td>
              <td class="p-3">{{ item.stok }}</td>
              <td class="p-3">
                <span
                  :class="item.status === 'aktif'
                    ? 'bg-green-100 text-green-700 px-2 py-1 rounded-full text-sm'
                    : 'bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-sm'"
                >
                  {{ item.status }}
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div v-if="loading" class="mt-3 text-gray-500 text-sm">Memuat data...</div>
      <div v-if="error" class="mt-3 text-red-500 text-sm">{{ error }}</div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const produk = ref([])
const loading = ref(false)
const error = ref('')

onMounted(async () => {
  try {
    loading.value = true
    const res = await axios.get('/api/produk')
    produk.value = res.data
  } catch (err) {
    error.value = 'Gagal memuat data produk'
  } finally {
    loading.value = false
  }
})
</script>
