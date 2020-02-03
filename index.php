<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

<head>

       <script src="JS/jquery-3.0.0.min.js"></script>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="accueil-header">
        <img class="header-log" id="logo-men" src="images/logo.png" style="width: 350px;">
    </div>
    <div class="accueil-body">

        <table style="margin: auto;">
            <tr>
                <td>
                    <div class="accueil-component materiel-color-gray" data-url="students/index.php">
                        <div class="accueil-component-icon">
                            <img src="images/2.gif" />
                        </div>
                        <div class="accueil-component-title">
                            <p>الفضاء الخاص بالتلميذات والتلاميذ و بأمهات وآباء التلميذات والتلاميذ</p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="accueil-component materiel-color-orange" data-url="professeur/index.php">
                        <div class="accueil-component-icon">
                            <img src="images/2.jpg" />
                        </div>
                        <div class="accueil-component-title">
                            <p>الفضاء الخاص بالاساتدة</p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="accueil-component materiel-color-orange" data-url="meadmin/index.php">
                        <div class="accueil-component-icon">
                            <img src="images/1.jpg" />
                        </div>
                        <div class="accueil-component-title">
                            <p>الفضاء الخاص بالمدير</p>
                        </div>
                    </div>
                </td>
            </tr>
        </table>




    </div>
    <div class="accueil-footer">
        <div class="pull-right">
            <b>Version</b> 1.0
        </div>
        <div class="pull-left">
            <strong>Copyright © 2020 </strong>
        </div>

    </div>

    <script>
        $(".accueil-component").click(function() {

            var $url = $(this).data("url");

            window.location.href = $url;
        })
    </script>

</body>

</html>
