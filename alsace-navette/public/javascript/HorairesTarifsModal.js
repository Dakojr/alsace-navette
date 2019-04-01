function HorairesTarifsModal() {
    $.get("/infoDestination",
        {

        },
        (data) => {
            var htmlmodal = `

            < !--Modal -->
                <div class="modal fade" id="HorairesTarifsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Informations sur DESTINATION</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="container">

                                    <div class="d-flex justify-content-around">
                                        <button class="btn btn-yellow" onclick=showHoraires()>Horaires d'été</button>
                                    <button class="btn btn-primary" onclick=showHoraires()>Horaires d'hiver</button>
                            </div>

                            <hr style="border-top: 1px solid rgba(251, 192, 45);">

                                <div class="d-flex justify-content-around">
                                    <h3>Départ Strasbourg Gare</h3>
                                    <h3>Départ Aéroport</h3>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="text-center list-group">
                                            <li class="list-group-item">hehe</li>
                                            <li class="list-group-item">hehe</li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-6">
                                        <ul class="text-center list-group">
                                            <li class="list-group-item">hehe</li>
                                            <li class="list-group-item">hehe</li>
                                        </ul>
                                    </div>
                                </div>

                                <hr >

                                    <div class="d-flex justify-content-center">
                                        <h3>Tarifs</h3>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <h3>50000 €</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="mr-auto">voir le site de l'aéroport</a>
                                <button type="button" class="btn btn-yellow" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                `


            $('#editmodal').append(htmlmodal);
            $('#HorairesTarifsModal').modal('show');
        })
}