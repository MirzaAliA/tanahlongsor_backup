@extends('layouts.main')

@section('container')
    <h1>Monitoring</h1>
    <br>
    <!-- panggil file jquery untuk proses realtime -->
    <script type="text/javascript" src="{{ 'jquery/jquery.min.js' }}"></script>

    <!-- ajax untuk realtime -->
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#accelerationx").load("{{ url('bacampu_accx') }}");
                $("#accelerationy").load("{{ url('bacampu_accy') }}");
                $("#accelerationz").load("{{ url('bacampu_accz') }}");
                $("#gyrox").load("{{ url('bacampu_gyrox') }}");
                $("#gyroy").load("{{ url('bacampu_gyroy') }}");
                $("#gyroz").load("{{ url('bacampu_gyroz') }}");
                $("#rain_curah").load("{{ url('bacarain_curah') }}");
                $("#rain_tip").load("{{ url('bacarain_tip') }}");
                $("#statussiaga").load("{{ url('statussiaga') }}");
                $("#statusmpu").load("{{ url('statusmpu') }}");
                $("#statushujan").load("{{ url('statushujan') }}");
            }, 1000);
        });
    </script>



    {{-- <h4>Status Siaga = </h4>
    <span id="statussiaga">0</span>
    <br> --}}
    {{-- <h4>Status Kemiringan = </h4>
    <span id="statusmpu">0</span>
    <br>
    <h4>Status Hujan = </h4>
    <span id="statushujan">0</span> --}}
    {{-- <br>
    <h4>Kecepatan Sumbu X = </h4>
    <span id="accelerationx">0</span>
    <br>
    <h4>Kecepatan Sumbu Y = </h4>
    <span id="accelerationy">0</span>
    <br>
    <h4>Kecepatan Sumbu Z = </h4>
    <span id="accelerationz">0</span>
    <br>
    <h4>Gyro Sumbu X = </h4>
    <span id="gyrox">0</span>
    <br>
    <h4>Gyro Sumbu Y = </h4>
    <span id="gyroy">0</span>
    <br>
    <h4>Gyro Sumbu Z = </h4>
    <span id="gyroz">0</span>
    <br>
    <h4>Curah Hujan = </h4>
    <span id="rain_curah">0</span>
    <br> --}}
    {{-- <h4>Tip Hujan = </h4>
    <span id="rain_tip">0</span>
    <br> --}}
    <a href="data">Lihat Data History Bacaan Sensor</a>


    <section class="my-10 lg:my-12 xl:my-16">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12 xl:mx-16 mt-10">
            <table class="w-full border border-black">
                <thead class="border border-black">
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Kecepatan Sumbu X</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Kecepatan Sumbu Y</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Kecepatan Sumbu Z</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Gyro Sumbu X</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Gyro Sumbu Y</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Gyro Sumbu Z</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Curah Hujan</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Tip Hujan</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Status Kemiringan</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Status Hujan</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] border border-black">
                        Status Siaga</th>
                </thead>
                <tbody>
                    <tr class="border border-black">
                        <td id="accelerationx" class="border border-black">
                            No Data
                        </td>
                        <td id="accelerationy" class="border border-black">
                            No Data
                        </td>
                        <td id="accelerationz" class="border border-black">
                            No Data
                        </td>
                        <td id="gyrox" class="border border-black">
                            No Data
                        </td>
                        <td id="gyroy" class="border border-black">
                            No Data
                        </td>
                        <td id="gyroz" class="border border-black">
                            No Data
                        </td>
                        <td id="rain_curah" class="border border-black">
                            No Data
                        </td>
                        <td id="rain_tip" class="border border-black">
                            No Data
                        </td>
                        <td id="statusmpu" class="border border-black">
                            No Data
                        </td>
                        <td id="statushujan" class="border border-black">
                            No Data
                        </td>
                        <td id="statussiaga" class="border border-black">
                            No Data
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
