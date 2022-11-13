<li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span
                            class="badge badge-danger badge-counter"><?php $habisTotal = $expired + $habis + $hampir_habis + $hampir_exp ; if ($habisTotal > 0) echo $habisTotal ?>
                        </span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Notifikasi
                        </h6>

                        <a class="dropdown-item d-flex align-items-center"
                            href="<?= base_url('user/tabel_kedaluwarsa')?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500"><?= date('j F Y'); ?></div>
                                <span class="font-weight-bold"><strong><?php echo $hampir_exp ?></strong> Obat akan
                                    segera Kedaluwarsa!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('user/tabel_stok')?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500"><?= date('j F Y'); ?></div>
                                <span class="font-weight-bold"><?php echo $hampir_habis ?> Obat akan segera habis
                                    Stok!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center"
                            href="<?= base_url('user/tabel_kedaluwarsa')?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500"><?= date('j F Y'); ?></div>
                                <span class="font-weight-bold"><?php echo $expired ?> Obat yang sudah
                                    Kedaluwarsa!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('user/tabel_stok')?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500"><?= date('j F Y'); ?></div>
                                <span class="font-weight-bold"><?php echo $habis ?> Obat sudah habis stok!</span>
                            </div>
                        </a>


                        <!-- <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a> -->
                    </div>
                </li>