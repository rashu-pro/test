<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
    <style>
        /* The Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }

        /* Modal Content */
        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 520px;
        }

        /* Close Button */
        .close {
            float: right;
            font-size: 28px;
            font-weight: bold;
            background: #e9e9e9;
            color: #000;
            padding: 0px 8px;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            background-color: #c5c5c5;
            text-decoration: none;
        }

        .modal-title {
            margin: 0 0 10px 0;
        }
    </style>
</head>

<body>

    <?php
    if(isset($_POST['disapprove_school'])){
        var_dump($_POST);
    }

    if(isset($_POST['approve_school'])){
        var_dump($_POST);
    }

    if(isset($_POST['remove_school'])){
        var_dump($_POST);
    }
    ?>

    <button class="modal-open-disapprove-js" data-id="4" data-name="Qalam Collegiate Academy" data-modal="#modal-disapprove-school-js">Open Modal</button>

    <button class="modal-open-disapprove-js" data-id="235" data-name="Renaissance Academy" data-modal="#modal-disapprove-school-js">Open Modal 235</button>

    <button class="modal-open-disapprove-js" data-id="320" data-name="Hidayah Academy" data-modal="#modal-disapprove-school-js">Open Modal 320</button>

    <button class="button button-primary modal-open-approve-js" data-id="" data-name="" data-modal="#modal-approve-school-js">Approve</button>

    <button class="button button-danger modal-open-remove-school-js" data-id="" data-name="" data-modal="#modal-remove-school-js">Remove School</button>

    <?php
    $modal_approve_string = <<<EOT
    <div id="modal-approve-school-js" class="modal modal-js">
        <div class="modal-content">
            <span class="close modal-close-js">&times;</span>
            <div class="modal-header">
                <h2 class="modal-title m-0">Approve a school</h2>
            </div>
            <div class="modal-body">
                <form method='post' style='display:inline-block'>
                    <p>Disapprove the school <b><span class="school-name-js"></span></b></p>
                    <input type='hidden' value='' name='school_id' class="school-id-js">
                    <div style="margin-top:25px">
                        <button type="button" class="modal-close-js" style="margin-right:15px">Cancel</button>
                        <input type='submit' name='approve_school' style='margin-right:10px' class='button button-secondary' value='Approve'>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>

        </div>
    </div>
    EOT;

    $modal_disapprove_string = <<<EOT
    <div id="modal-disapprove-school-js" class="modal modal-js">
        <div class="modal-content">
            <span class="close modal-close-js">&times;</span>
            <div class="modal-header">
                <h2 class="modal-title m-0">Disapprove a school</h2>
            </div>
            <div class="modal-body">
                <form method='post' style='display:inline-block'>
                    <p>Disapprove the school <b>"<span class="school-name-js"></span>"</b></p>
                    <input type='hidden' value='' name='school_id' class="school-id-js">
                    <div style="margin-top:25px">
                        <button type="button" class="modal-close-js" style="margin-right:15px">Cancel</button>
                        <input type='submit' name='disapprove_school' style='margin-right:10px' class='button button-secondary' value='Disapprove'>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>

        </div>
    </div>
    EOT;

    $modal_remove_string = <<<EOT
    <div id="modal-remove-school-js" class="modal modal-js">
        <div class="modal-content">
            <span class="close modal-close-js">&times;</span>
            <div class="modal-header">
                <h2 class="modal-title m-0">Remove a school</h2>
            </div>
            <div class="modal-body">
                <form method='post' style='display:inline-block'>
                    <p>Remove the school <b><span class="school-name-js"></span></b></p>
                    <input type='hidden' value='' name='school_id' class="school-id-js">
                    <div style="margin-top:25px">
                        <button type="button" class="modal-close-js" style="margin-right:15px">Cancel</button>
                        <input type='submit' name='remove_school' style='margin-right:10px' class='button button-secondary' value='Remove'>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>

        </div>
    </div>
    EOT;


    echo $modal_approve_string;
    echo $modal_disapprove_string;
    echo $modal_remove_string;
     ?>

    <script src="jquery/jquery.min.js"></script>
    <script>
        // Function to open the modal
        function openModal(modalSelector) {
            modalSelector.show();
        }

        // Function to close the modal
        function closeModal(modalSelector) {
            modalSelector.hide();
        }

        $(document).on('click', function(event) {
            if ($(event.target).is('.modal-js')) {
                closeModal($('.modal-js'));
            }
        });

        $(document).on('click', '.modal-open-disapprove-js, .modal-open-approve-js, .modal-open-remove-school-js', function(e) {
            e.preventDefault();
            const self = $(this);
            const schoolId = self.attr('data-id');
            const schoolName = self.attr('data-name');
            const modalSelector = $(self.attr('data-modal'));

            modalSelector.find('.school-id-js').val(schoolId);
            modalSelector.find('.school-name-js').text(schoolName);

            openModal(modalSelector);
        })

        $(document).on('click', '.modal-close-js', function(e) {
            e.preventDefault();
            const self = $(this);
            const modalSelector = self.closest('.modal-js');

            modalSelector.find('.school-id-js').val('');

            closeModal(modalSelector);
        })
    </script>

</body>

</html>