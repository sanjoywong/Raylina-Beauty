<body class="home page-template-default page page-id-2172 wp-embed-responsive stk--is-blocksy-theme ct-loading" data-link="type-4" data-prefix="single_page" data-header="type-1:sticky" data-footer="type-1:reveal" itemscope="itemscope" itemtype="https://schema.org/WebPage">
    <div id="container" style="width:50%;position:relative;top: 25%;left: 25%;margin-top: 11%;margin-bottom: 6%;border-radius: 30px;padding:40px 80px;">
        
    
        <form action="index.php?page=inscription" method="post">
            <h3>Inscrivez-vous ! </h3>
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom"  placeholder="Entrer le nom" style="border: 3px;border-style:solid" required/>
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrer le prenom" style="border: 3px;border-style:solid" required/>
            </div>
            <div>
                <label for="mail">e-mail :</label>
                <input type="text" id="mail" name="mail" placeholder="Entrer l'email" style="border: 3px;border-style:solid" required />
            </div>
            <div>
                <label for="password1">Mot de passe :</label>
                <input type="password" id="password1" name="password1" placeholder="Entrer le mot de passe" style="border: 3px;border-style:solid"/>
            </div>
            <div>
                <label for="password2">Mot de passe (vérification) :</label>
                <input type="password" id="password2" name="password2" placeholder="Reentrer le mot de passe" style="border: 3px;border-style:solid" />
            </div>
            <div>
                <input type="reset" value="Effacer" style="background-color: #4caf50;padding: 10px 70px;text-align:left;color:white"/>
                <input type="submit" value="Envoyer" style="padding: 4px 70px;" />
            </div>
            <input type="hidden" name="frmInscription" />
        </form>

    </div>

</body>