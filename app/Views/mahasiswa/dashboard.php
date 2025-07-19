<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<div class="card">
    <div class="card-header">
        <h4>Jadwal Ujian Tengah Semester/Akhir Semester</h4>
    </div>
    <div class="card-body">
        <div class="accordion" id="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true`" aria-controls="collapseTwo">
                        Jadwal Ujian
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">No</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Kode</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Mata Kuliah</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Ruang, No. Kursi</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Hari</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Tanggal</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Sesi</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Pengampu</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Username SEB</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Password SEB</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($calendarEventsList) && is_array($calendarEventsList)): ?>
                                        <?php $no = 1;
                                        foreach ($calendarEventsList as $jadwal): ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= esc($jadwal['kode']); ?></td>
                                                <td><?= esc($jadwal['title']); ?></td>
                                                <td><?= esc($jadwal['ruang']); ?></td>
                                                <td>
                                                    <?php
                                                    $hariIndo = [
                                                        'Sunday' => 'Minggu',
                                                        'Monday' => 'Senin',
                                                        'Tuesday' => 'Selasa',
                                                        'Wednesday' => 'Rabu',
                                                        'Thursday' => 'Kamis',
                                                        'Friday' => 'Jumat',
                                                        'Saturday' => 'Sabtu'
                                                    ];
                                                    $date = new DateTime($jadwal['start']);
                                                    $hari = $hariIndo[$date->format('l')] ?? $date->format('l');
                                                    echo $hari;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $date = new DateTime($jadwal['start']);
                                                    echo $date->format('Y-m-d');
                                                    ?>
                                                </td>
                                                <td><?= esc($jadwal['session']); ?></td>
                                                <td><?= esc($jadwal['pengampu']); ?></td>
                                                <td><?= esc($jadwal['username']); ?></td>
                                                <td>
                                                    <?php if (is_null($jadwal['password'])) {
                                                        echo '<span class="mb-1 badge text-bg-danger">belum melakukan uji coba.</span>';
                                                    } else {
                                                        echo esc($jadwal['password']);
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="10" class="text-center">Tidak ada jadwal ujian.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Kalender Ujian
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                    <div class="card">
                        <div class="card-body calender-sidebar app-calendar">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');

        // Ambil data event dari PHP
        const calendarEventsList = <?= json_encode($calendarEventsList); ?>;

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            slotLabelFormat: {
                hour: '2-digit',
                minute: '2-digit',
                hour12: false // format 24 jam
            },
            eventTimeFormat: {
                hour: '2-digit',
                minute: '2-digit',
                hour12: false
            },
            events: calendarEventsList,
            eventClassNames: function({
                event: calendarEvent
            }) {
                const now = new Date();
                const start = calendarEvent.start;
                const end = calendarEvent.end || start;

                // Normalize dates (remove time for comparison)
                const today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
                const eventStart = new Date(start.getFullYear(), start.getMonth(), start.getDate());
                const eventEnd = new Date(end.getFullYear(), end.getMonth(), end.getDate());

                // Event has ended (before today)
                if (eventEnd < today) {
                    return ['event-fc-color', 'fc-bg-secondary'];
                }

                // Event is today
                if (eventStart <= today && eventEnd >= today) {
                    return ['event-fc-color', 'fc-bg-danger'];
                }

                // Event duration in ms
                const durationMs = end - start;
                const oneDayMs = 24 * 60 * 60 * 1000;

                // Less than a day
                return ['event-fc-color', 'fc-bg-success'];
            },

            eventClick: function(info) {
                const event = info.event;
                const title = encodeURIComponent(event.title);
                const description = encodeURIComponent(event.extendedProps.description || '');
                const location = encodeURIComponent(event.extendedProps.location || '');

                const start = new Date(event.start);
                const end = new Date(event.end || start);

                const toGCalTime = (date) => {
                    return date.toISOString().replace(/-|:|\.\d+/g, '');
                }

                const dates = `${toGCalTime(start)}/${toGCalTime(end)}`;

                const gcalUrl = `https://calendar.google.com/calendar/render?action=TEMPLATE&text=${title}&dates=${dates}&details=${description}&location=${location}&sf=true&output=xml`;

                window.open(gcalUrl, '_blank');
            }
        });

        calendar.render();
    });
</script>

<?= $this->endSection(); ?>