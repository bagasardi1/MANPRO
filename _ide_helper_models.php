<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id_admin
 * @property string $nama
 * @property string $email
 * @property string $password
 * @property int $id_super_admin
 * @property int $bisa_kelola_produk
 * @property int $bisa_kelola_pesanan
 * @property int $bisa_kelola_promo
 * @property int $bisa_lihat_laporan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LogAktivitas> $logAktivitas
 * @property-read int|null $log_aktivitas_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\SuperAdmin $superAdmin
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereBisaKelolaPesanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereBisaKelolaProduk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereBisaKelolaPromo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereBisaLihatLaporan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereIdAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereIdSuperAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_alamat
 * @property int $id_customer
 * @property string $label
 * @property string $detail_alamat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer $customer
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Alamat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Alamat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Alamat query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Alamat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Alamat whereDetailAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Alamat whereIdAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Alamat whereIdCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Alamat whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Alamat whereUpdatedAt($value)
 */
	class Alamat extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_customer
 * @property string $nama
 * @property string $email
 * @property string $password
 * @property string $no_whatsapp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Alamat> $alamat
 * @property-read int|null $alamat_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pesanan> $pesanan
 * @property-read int|null $pesanan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ulasan> $ulasan
 * @property-read int|null $ulasan_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereIdCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereNoWhatsapp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_kategori
 * @property string $nama_kategori
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Produk> $produk
 * @property-read int|null $produk_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kategori newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kategori newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kategori query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kategori whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kategori whereIdKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kategori whereNamaKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kategori whereUpdatedAt($value)
 */
	class Kategori extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_log
 * @property int $id_admin
 * @property string $aktivitas
 * @property string $waktu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin $admin
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogAktivitas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogAktivitas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogAktivitas query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogAktivitas whereAktivitas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogAktivitas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogAktivitas whereIdAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogAktivitas whereIdLog($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogAktivitas whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogAktivitas whereWaktu($value)
 */
	class LogAktivitas extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_pembayaran
 * @property int $id_pesanan
 * @property string $metode
 * @property string $status
 * @property string|null $url_bukti_bayar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pesanan $pesanan
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran whereIdPembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran whereIdPesanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran whereMetode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pembayaran whereUrlBuktiBayar($value)
 */
	class Pembayaran extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_pesanan
 * @property int $id_customer
 * @property int|null $id_admin
 * @property string $waktu_pemesanan
 * @property string|null $waktu_pembayaran
 * @property string|null $waktu_selesai
 * @property string $tanggal_booking
 * @property string $status_pesanan
 * @property string $total_harga
 * @property int|null $id_promo
 * @property int|null $id_slot_booking
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin|null $admin
 * @property-read \App\Models\Customer $customer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Produk> $detailPesanan
 * @property-read int|null $detail_pesanan_count
 * @property-read \App\Models\Pembayaran|null $pembayaran
 * @property-read \App\Models\Promo|null $promo
 * @property-read \App\Models\SlotBooking|null $slotBooking
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereIdAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereIdCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereIdPesanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereIdPromo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereIdSlotBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereStatusPesanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereTanggalBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereTotalHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereWaktuPembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereWaktuPemesanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Pesanan whereWaktuSelesai($value)
 */
	class Pesanan extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_produk
 * @property string $nama_produk
 * @property string $deskripsi
 * @property string $harga
 * @property int $stok
 * @property string|null $url_gambar
 * @property string $status
 * @property int $id_kategori
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Kategori $kategori
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereIdKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereIdProduk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereNamaProduk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereStok($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Produk whereUrlGambar($value)
 */
	class Produk extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_promo
 * @property string $kode_promo
 * @property string $potongan_harga
 * @property string $tanggal_mulai
 * @property string $tanggal_berakhir
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pesanan> $pesanan
 * @property-read int|null $pesanan_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo whereIdPromo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo whereKodePromo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo wherePotonganHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo whereTanggalBerakhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo whereTanggalMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promo whereUpdatedAt($value)
 */
	class Promo extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_slot_booking
 * @property string $tanggal
 * @property int $sisa_slot
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SlotBooking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SlotBooking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SlotBooking query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SlotBooking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SlotBooking whereIdSlotBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SlotBooking whereSisaSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SlotBooking whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SlotBooking whereUpdatedAt($value)
 */
	class SlotBooking extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_super_admin
 * @property string $nama
 * @property string $email
 * @property string $password
 * @property int $full_access
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin> $admin
 * @property-read int|null $admin_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin whereFullAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin whereIdSuperAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SuperAdmin whereUpdatedAt($value)
 */
	class SuperAdmin extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id_ulasan
 * @property int $id_pesanan
 * @property int $id_customer
 * @property int $rating
 * @property string|null $komentar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer $customer
 * @property-read \App\Models\Pesanan $pesanan
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan whereIdCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan whereIdPesanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan whereIdUlasan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan whereKomentar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ulasan whereUpdatedAt($value)
 */
	class Ulasan extends \Eloquent {}
}

namespace App\Models{
/**
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 */
	class User extends \Eloquent {}
}

