    <?php if ($full_page == false): ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <div class="float-start text-muted text-start small">Lavet af Casper Munk<span class="d-none d-md-inline"> Christiansen</span></div>
            <div class="float-end text-muted text-end small"><a href="betingelser" class="text-muted">Betingelser<span class="d-none d-md-inline"> for brug</span></a></div>
        </div>
    </footer>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" async></script>
    
    <?php if (in_array('jQuery',$loadElements) AND !in_array('DataTables',$loadElements)): ?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?php endif; ?>

    <?php if (in_array('DataTables',$loadElements)): ?>
        <link rel="preload" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/fh-3.1.7/r-2.2.6/datatables.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/fh-3.1.7/r-2.2.6/datatables.min.css"></noscript>

        <link rel="preload" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css"></noscript>

        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/fh-3.1.7/r-2.2.6/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js" async></script>
        
        <?php if (isset($dataTable)) echo $dataTable->jsFile; ?>
    <?php endif; ?>

    <?php if (in_array('updater.js',$loadElements)): ?>
        <script type="text/javascript" src="js/updater.js" async></script>
    <?php endif; ?>

    <?php if (in_array('records.js',$loadElements)): ?>
        <script type="text/javascript" src="js/records.js" async></script>
    <?php endif; ?>

    <script>
    // var n = document.createElement('script');
    // n.setAttribute('language', 'JavaScript');
    // n.setAttribute('src', 'https://debug.datatables.net/debug.js');
    // document.body.appendChild(n);
    </script>

    <?php if (!is_local()): ?>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="8e413f14-cb38-4f21-b272-ef107fbe4387" data-blockingmode="auto" type="text/javascript"></script>
    <script id="CookieDeclaration" src="https://consent.cookiebot.com/8e413f14-cb38-4f21-b272-ef107fbe4387/cd.js" type="text/javascript" async></script>
    <?php endif; ?>
    
</body>
</html>