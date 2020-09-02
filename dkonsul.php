							<ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php	">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tentang
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="profil.php">Profil RSIA</a>
                                        <a class="dropdown-item" href="dokter.php">Dokter</a>
                                        <a class="dropdown-item" href="galeri.php">Galeri</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Fasilitas
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="igd.php">IGD 24 Jam</a>
                                        <a class="dropdown-item" href="rajal.php">Fasilitas Rawat Jalan</a>
                                        <a class="dropdown-item" href="ranap.php">Fasilitas Rawat Inap</a>
                                        <a class="dropdown-item" href="penunjang.php">Fasilitas Penunjang</a>
                                        <a class="dropdown-item" href="umum.php">Fasilitas Umum</a>
                                        <a class="dropdown-item" href="laktasi.php">Klinik Laktasi</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Informasi
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="jadwaldokter.php">Jadwal Dokter</a>
                                        <a class="dropdown-item" href="alurdaftaroff.php">Alur Pendaftaran</a>
                                        <a class="dropdown-item" href="alurdaftaroff.php">Pendaftaran Online</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="karir.php">Karir</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="kontak.php">Kritik & Saran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
										<script type="text/javascript">  
											var CryptoJS = require( "crypto-js" ); 
											var cryptAuth = { 
											key: CryptoJS .enc. Utf8 .parse( 'F18AB33A57F9B229CC9C250D00FC3273' ), 
											iv: CryptoJS .enc. Utf8 .parse( 'D959B836CD9FB162' ), 
											encrypt: function (clear){ 
											var cipher = CryptoJS . AES .encrypt(clear, cryptAuth.key, { 
											iv: cryptAuth.iv, 
											mode: CryptoJS .mode. CTR 
											}); 
											cipher = cipher.toString(); 
											return cipher; 
											}, 
											decrypt: function (cipher) { 
											var decipher = CryptoJS . AES .decrypt(cipher, cryptAuth.key, { 
											iv: cryptAuth.iv, 
											mode: CryptoJS .mode. CTR 
											}); 
											decipher = decipher.toString( CryptoJS .enc. Utf8 ); 
											return decipher; 
											} } 
											var cipher = cryptAuth.encrypt( 'someone@email.com#Full Name' ); 
											var chatAuth = cipher.replace( / [\/] / g , '@1@' ); 
											var chatAuth2 = chatAuth.replace( / [ = ] / g , '@2@' ); 
											var chatAuth3 = chatAuth2.replace( / [ + ] / g , '@3@' ); 
											console.log( "url:" , 
											"https://m.goapotik.com/konsultasidokter?merchantchat=4423&header=0&footer=0&services=1&fortype=2&auth="+ chatAuth3)
										</script> 
									</a>
                                </li>
                            </ul>