
if(document.querySelector('#mapa')){

        document.addEventListener('DOMContentLoaded', () => {

            const lat = -26.18489;
            const lng = -58.17313;

            const mapa = L.map('mapa').setView([lat, lng], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(mapa);

            var circle = L.circle([lat, lng], {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5,
                    radius: 250
                }).addTo(mapa);

                var marker = L.marker([lat, lng], {
                    draggable: true,
                    autoPan: true
                } ).addTo(mapa);

                console.log(L.esri);

                //detectar movimiento
                marker.on('moveend', function(e){
                    var marker = e.target;
                    const posicion = marker.getLatLng();
                    mapa.panTo(new L.LatLng(posicion.lat, posicion.lng));
                   console.log(posicion);
                   console.log(L.esri);
                })

            });

    }
