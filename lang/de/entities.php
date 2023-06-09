<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Kürzlich angelegt',
    'recently_created_pages' => 'Kürzlich angelegte Seiten',
    'recently_updated_pages' => 'Kürzlich aktualisierte Seiten',
    'recently_created_chapters' => 'Kürzlich angelegte Kapitel',
    'recently_created_books' => 'Kürzlich angelegte Bücher',
    'recently_created_shelves' => 'Kürzlich angelegte Regale',
    'recently_update' => 'Kürzlich aktualisiert',
    'recently_viewed' => 'Kürzlich angesehen',
    'recent_activity' => 'Kürzliche Aktivität',
    'create_now' => 'Jetzt anlegen',
    'revisions' => 'Versionen',
    'meta_revision' => 'Version #:revisionCount',
    'meta_created' => 'Erstellt: :timeLength',
    'meta_created_name' => 'Erstellt: :timeLength von :user',
    'meta_updated' => 'Zuletzt aktualisiert: :timeLength',
    'meta_updated_name' => 'Zuletzt aktualisiert: :timeLength von :user',
    'meta_owned_name' => 'Im Besitz von :user',
    'meta_reference_page_count' => 'Verwiesen auf 1 Seite|Verwiesen auf :count Seiten',
    'entity_select' => 'Eintrag auswählen',
    'entity_select_lack_permission' => 'Sie haben nicht die benötigte Berechtigung, um dieses Element auszuwählen',
    'images' => 'Bilder',
    'my_recent_drafts' => 'Meine kürzlichen Entwürfe',
    'my_recently_viewed' => 'Kürzlich von mir angesehen',
    'my_most_viewed_favourites' => 'Meine meistgesehenen Favoriten',
    'my_favourites' => 'Meine Favoriten',
    'no_pages_viewed' => 'Sie haben bisher keine Seiten angesehen',
    'no_pages_recently_created' => 'Sie haben bisher keine Seiten angelegt',
    'no_pages_recently_updated' => 'Sie haben bisher keine Seiten aktualisiert',
    'export' => 'Exportieren',
    'export_html' => 'HTML-Datei',
    'export_pdf' => 'PDF-Datei',
    'export_text' => 'Textdatei',
    'export_md' => 'Markdown-Datei',

    // Permissions and restrictions
    'permissions' => 'Berechtigungen',
    'permissions_desc' => 'Legen Sie hier Berechtigungen fest, um die Standardberechtigungen von Benutzerrollen zu überschreiben.',
    'permissions_book_cascade' => 'In Büchern festgelegte Berechtigungen werden automatisch in untergeordnete Kapitel und Seiten kaskadiert, es sei denn, sie haben eigene Berechtigungen definiert.',
    'permissions_chapter_cascade' => 'In Kapiteln festgelegte Berechtigungen werden automatisch in untergeordnete Seiten kaskadiert, es sei denn, sie haben eigene Berechtigungen definiert.',
    'permissions_save' => 'Berechtigungen speichern',
    'permissions_owner' => 'Besitzer',
    'permissions_role_everyone_else' => 'Alle anderen',
    'permissions_role_everyone_else_desc' => 'Berechtigungen für alle Rollen setzen, die nicht explizit überschrieben wurden.',
    'permissions_role_override' => 'Berechtigungen für Rolle überschreiben',
    'permissions_inherit_defaults' => 'Standardeinstellungen vererben',

    // Search
    'search_results' => 'Suchergebnisse',
    'search_total_results_found' => ':count Ergebnis gefunden|:count Ergebnisse gesamt',
    'search_clear' => 'Filter löschen',
    'search_no_pages' => 'Keine Seiten gefunden',
    'search_for_term' => 'Nach :term suchen',
    'search_more' => 'Mehr Ergebnisse',
    'search_advanced' => 'Erweiterte Suche',
    'search_terms' => 'Suchbegriffe',
    'search_content_type' => 'Inhaltstyp',
    'search_exact_matches' => 'Exakte Treffer',
    'search_tags' => 'Nach Schlagwort suchen',
    'search_options' => 'Optionen',
    'search_viewed_by_me' => 'Schon von mir angesehen',
    'search_not_viewed_by_me' => 'Noch nicht von mir angesehen',
    'search_permissions_set' => 'Berechtigungen gesetzt',
    'search_created_by_me' => 'Von mir erstellt',
    'search_updated_by_me' => 'Von mir aktualisiert',
    'search_owned_by_me' => 'Besitzt von mir',
    'search_date_options' => 'Datums Optionen',
    'search_updated_before' => 'Aktualisiert vor',
    'search_updated_after' => 'Aktualisiert nach',
    'search_created_before' => 'Erstellt vor',
    'search_created_after' => 'Erstellt nach',
    'search_set_date' => 'Datum auswählen',
    'search_update' => 'Suche aktualisieren',

    // Shelves
    'shelf' => 'Regal',
    'shelves' => 'Regale',
    'x_shelves' => ':count Regal|:count Regale',
    'shelves_empty' => 'Es wurden noch keine Regale angelegt',
    'shelves_create' => 'Erzeuge ein Regal',
    'shelves_popular' => 'Beliebte Regale',
    'shelves_new' => 'Kürzlich erstellte Regale',
    'shelves_new_action' => 'Neues Regal',
    'shelves_popular_empty' => 'Die beliebtesten Regale werden hier angezeigt.',
    'shelves_new_empty' => 'Die neusten Regale werden hier angezeigt.',
    'shelves_save' => 'Regal speichern',
    'shelves_books' => 'Bücher in diesem Regal',
    'shelves_add_books' => 'Buch zu diesem Regal hinzufügen',
    'shelves_drag_books' => 'Ziehen Sie Bücher nach unten, um sie diesem Regal hinzuzufügen',
    'shelves_empty_contents' => 'Diesem Regal sind keine Bücher zugewiesen',
    'shelves_edit_and_assign' => 'Regal bearbeiten um Bücher hinzuzufügen',
    'shelves_edit_named' => 'Regal :name bearbeiten',
    'shelves_edit' => 'Regal bearbeiten',
    'shelves_delete' => 'Regal löschen',
    'shelves_delete_named' => 'Regal :name löschen',
    'shelves_delete_explain' => "Dadurch wird das Regal mit dem Namen ':name' gelöscht. Die darin enthaltenen Bücher werden nicht gelöscht.",
    'shelves_delete_confirmation' => 'Sind Sie sicher, dass Sie dieses Regal löschen möchten?',
    'shelves_permissions' => 'Regalberechtigungen',
    'shelves_permissions_updated' => 'Regalberechtigungen aktualisiert',
    'shelves_permissions_active' => 'Regalberechtigungen aktiv',
    'shelves_permissions_cascade_warning' => 'Berechtigungen für Regale werden nicht automatisch auf die enthaltenen Bücher übertragen. Das liegt daran, dass ein Buch in mehreren Regalen vorhanden sein kann. Berechtigungen können jedoch auf untergeordnete Bücher kopiert werden, indem Sie die unten stehende Option verwenden.',
    'shelves_copy_permissions_to_books' => 'Kopiere die Berechtigungen zum Buch',
    'shelves_copy_permissions' => 'Berechtigungen kopieren',
    'shelves_copy_permissions_explain' => 'Dadurch werden die aktuellen Berechtigungseinstellungen dieses Regals auf alle darin enthaltenen Bücher angewendet. Vergewissern Sie sich vor der Aktivierung, dass alle Änderungen an den Berechtigungen für dieses Regal gespeichert wurden.',
    'shelves_copy_permission_success' => 'Regalberechtigungen auf :count Bücher kopiert',

    // Books
    'book' => 'Buch',
    'books' => 'Bücher',
    'x_books' => ':count Buch|:count Bücher',
    'books_empty' => 'Keine Bücher vorhanden',
    'books_popular' => 'Beliebte Bücher',
    'books_recent' => 'Kürzlich angesehene Bücher',
    'books_new' => 'Neue Bücher',
    'books_new_action' => 'Neues Buch',
    'books_popular_empty' => 'Die beliebtesten Bücher werden hier angezeigt.',
    'books_new_empty' => 'Die neusten Bücher werden hier angezeigt.',
    'books_create' => 'Neues Buch erstellen',
    'books_delete' => 'Buch löschen',
    'books_delete_named' => 'Buch ":bookName" löschen',
    'books_delete_explain' => 'Das Buch ":bookName" wird gelöscht und alle zugehörigen Kapitel und Seiten entfernt.',
    'books_delete_confirmation' => 'Sind Sie sicher, dass Sie dieses Buch löschen möchten?',
    'books_edit' => 'Buch bearbeiten',
    'books_edit_named' => 'Buch ":bookName" bearbeiten',
    'books_form_book_name' => 'Name des Buches',
    'books_save' => 'Buch speichern',
    'books_permissions' => 'Buch-Berechtigungen',
    'books_permissions_updated' => 'Buch-Berechtigungen aktualisiert',
    'books_empty_contents' => 'Es sind noch keine Seiten oder Kapitel zu diesem Buch hinzugefügt worden.',
    'books_empty_create_page' => 'Neue Seite anlegen',
    'books_empty_sort_current_book' => 'Aktuelles Buch sortieren',
    'books_empty_add_chapter' => 'Neues Kapitel hinzufügen',
    'books_permissions_active' => 'Buch-Berechtigungen aktiv',
    'books_search_this' => 'Dieses Buch durchsuchen',
    'books_navigation' => 'Buchnavigation',
    'books_sort' => 'Buchinhalte sortieren',
    'books_sort_desc' => 'Kapitel und Seiten innerhalb eines Buches verschieben, um dessen Inhalt zu reorganisieren. Andere Bücher können hinzugefügt werden, was das Verschieben von Kapiteln und Seiten zwischen Büchern erleichtert.',
    'books_sort_named' => 'Buch ":bookName" sortieren',
    'books_sort_name' => 'Sortieren nach Namen',
    'books_sort_created' => 'Sortieren nach Erstellungsdatum',
    'books_sort_updated' => 'Sortieren nach Aktualisierungsdatum',
    'books_sort_chapters_first' => 'Kapitel zuerst',
    'books_sort_chapters_last' => 'Kapitel zuletzt',
    'books_sort_show_other' => 'Andere Bücher anzeigen',
    'books_sort_save' => 'Neue Reihenfolge speichern',
    'books_sort_show_other_desc' => 'Füge hier weitere Bücher hinzu, um sie in die Sortierung einzubinden und ermögliche so eine einfache und übergreifende Reorganisation.',
    'books_sort_move_up' => 'Nach oben bewegen',
    'books_sort_move_down' => 'Nach unten bewegen',
    'books_sort_move_prev_book' => 'Zum vorherigen Buch verschieben',
    'books_sort_move_next_book' => 'Zum nächsten Buch verschieben',
    'books_sort_move_prev_chapter' => 'In das vorherige Kapitel verschieben',
    'books_sort_move_next_chapter' => 'In nächstes Kapitel verschieben',
    'books_sort_move_book_start' => 'Zum Buchbeginn verschieben',
    'books_sort_move_book_end' => 'Zum Ende des Buches verschieben',
    'books_sort_move_before_chapter' => 'Vor Kapitel verschieben',
    'books_sort_move_after_chapter' => 'Nach Kapitel verschieben',
    'books_copy' => 'Buch kopieren',
    'books_copy_success' => 'Das Buch wurde erfolgreich kopiert',

    // Chapters
    'chapter' => 'Kapitel',
    'chapters' => 'Kapitel',
    'x_chapters' => ':count Kapitel',
    'chapters_popular' => 'Beliebte Kapitel',
    'chapters_new' => 'Neues Kapitel',
    'chapters_create' => 'Neues Kapitel anlegen',
    'chapters_delete' => 'Kapitel entfernen',
    'chapters_delete_named' => 'Kapitel ":chapterName" entfernen',
    'chapters_delete_explain' => 'Dies löscht das Kapitel mit dem Namen \':chapterName\'. Alle Seiten, die innerhalb dieses Kapitels existieren, werden ebenfalls gelöscht.',
    'chapters_delete_confirm' => 'Sind Sie sicher, dass Sie dieses Kapitel löschen möchten?',
    'chapters_edit' => 'Kapitel bearbeiten',
    'chapters_edit_named' => 'Kapitel ":chapterName" bearbeiten',
    'chapters_save' => 'Kapitel speichern',
    'chapters_move' => 'Kapitel verschieben',
    'chapters_move_named' => 'Kapitel ":chapterName" verschieben',
    'chapter_move_success' => 'Das Kapitel wurde in das Buch ":bookName" verschoben.',
    'chapters_copy' => 'Kapitel kopieren',
    'chapters_copy_success' => 'Kapitel erfolgreich kopiert',
    'chapters_permissions' => 'Kapitel-Berechtigungen',
    'chapters_empty' => 'Aktuell sind keine Kapitel diesem Buch hinzugefügt worden.',
    'chapters_permissions_active' => 'Kapitel-Berechtigungen aktiv',
    'chapters_permissions_success' => 'Kapitel-Berechtigungenen aktualisisert',
    'chapters_search_this' => 'Dieses Kapitel durchsuchen',
    'chapter_sort_book' => 'Buch sortieren',

    // Pages
    'page' => 'Seite',
    'pages' => 'Seiten',
    'x_pages' => ':count Seite|:count Seiten',
    'pages_popular' => 'Beliebte Seiten',
    'pages_new' => 'Neue Seite',
    'pages_attachments' => 'Anhänge',
    'pages_navigation' => 'Seitennavigation',
    'pages_delete' => 'Seite löschen',
    'pages_delete_named' => 'Seite ":pageName" löschen',
    'pages_delete_draft_named' => 'Seitenentwurf von ":pageName" löschen',
    'pages_delete_draft' => 'Seitenentwurf löschen',
    'pages_delete_success' => 'Seite gelöscht',
    'pages_delete_draft_success' => 'Seitenentwurf gelöscht',
    'pages_delete_confirm' => 'Sind Sie sicher, dass Sie diese Seite löschen möchen?',
    'pages_delete_draft_confirm' => 'Sind Sie sicher, dass Sie diesen Seitenentwurf löschen möchten?',
    'pages_editing_named' => 'Seite ":pageName" bearbeiten',
    'pages_edit_draft_options' => 'Entwurfsoptionen',
    'pages_edit_save_draft' => 'Entwurf speichern',
    'pages_edit_draft' => 'Seitenentwurf bearbeiten',
    'pages_editing_draft' => 'Seitenentwurf bearbeiten',
    'pages_editing_page' => 'Seite bearbeiten',
    'pages_edit_draft_save_at' => 'Entwurf gespeichert um ',
    'pages_edit_delete_draft' => 'Entwurf löschen',
    'pages_edit_discard_draft' => 'Entwurf verwerfen',
    'pages_edit_switch_to_markdown' => 'Zum Markdown Editor wechseln',
    'pages_edit_switch_to_markdown_clean' => '(gesäuberter Output)',
    'pages_edit_switch_to_markdown_stable' => '(html beibehalten)',
    'pages_edit_switch_to_wysiwyg' => 'Wechseln Sie zum WYSIWYG-Editor',
    'pages_edit_set_changelog' => 'Änderungsprotokoll hinzufügen',
    'pages_edit_enter_changelog_desc' => 'Bitte geben Sie eine kurze Zusammenfassung Ihrer Änderungen ein',
    'pages_edit_enter_changelog' => 'Änderungsprotokoll eingeben',
    'pages_editor_switch_title' => 'Editor wechseln',
    'pages_editor_switch_are_you_sure' => 'Sind Sie sicher, dass Sie den Editor für diese Seite ändern möchten?',
    'pages_editor_switch_consider_following' => 'Betrachten Sie folgendes beim Ändern von Editoren:',
    'pages_editor_switch_consideration_a' => 'Einmal gespeichert, wird die neue Editoroption von zukünftigen Editoren verwendet, einschließlich derjenigen, die nicht in der Lage sind, den Editortyp selbst zu ändern.',
    'pages_editor_switch_consideration_b' => 'Dies kann unter bestimmten Umständen zu einem Verlust von Details und Quellcode führen.',
    'pages_editor_switch_consideration_c' => 'Änderungen des Tags oder Änderungsprotokolls, die seit dem letzten Speichern vorgenommen wurden, werden bei dieser Änderung nicht fortgesetzt.',
    'pages_save' => 'Seite speichern',
    'pages_title' => 'Seitentitel',
    'pages_name' => 'Seitenname',
    'pages_md_editor' => 'Redakteur',
    'pages_md_preview' => 'Vorschau',
    'pages_md_insert_image' => 'Bild einfügen',
    'pages_md_insert_link' => 'Link zu einem Objekt einfügen',
    'pages_md_insert_drawing' => 'Zeichnung einfügen',
    'pages_md_show_preview' => 'Vorschau anzeigen',
    'pages_md_sync_scroll' => 'Vorschau synchronisieren',
    'pages_not_in_chapter' => 'Seite ist in keinem Kapitel',
    'pages_move' => 'Seite verschieben',
    'pages_move_success' => 'Seite nach ":parentName" verschoben',
    'pages_copy' => 'Seite kopieren',
    'pages_copy_desination' => 'Ziel',
    'pages_copy_success' => 'Seite erfolgreich kopiert',
    'pages_permissions' => 'Seiten Berechtigungen',
    'pages_permissions_success' => 'Seiten Berechtigungen aktualisiert',
    'pages_revision' => 'Version',
    'pages_revisions' => 'Seitenversionen',
    'pages_revisions_desc' => 'Alle vorherhigen Revisionen dieser Seite sind unten aufgelistet. Sie können zurückschauen, vergleichen und alte Seitenversionen wiederherstellen, wenn die Berechtigungen dies erlauben. Der vollständige Verlauf der Seite kann hier möglicherweise nicht vollständig wiedergegeben werden, da je nach Systemkonfiguration alte Revisionen automatisch hätten gelöscht werden können.',
    'pages_revisions_named' => 'Seitenversionen von ":pageName"',
    'pages_revision_named' => 'Seitenversion von ":pageName"',
    'pages_revision_restored_from' => 'Wiederhergestellt von #:id; :summary',
    'pages_revisions_created_by' => 'Erstellt von',
    'pages_revisions_date' => 'Versionsdatum',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revisionsnummer',
    'pages_revisions_numbered' => 'Revision #:id',
    'pages_revisions_numbered_changes' => 'Revision #:id Änderungen',
    'pages_revisions_editor' => 'Editor-Typ',
    'pages_revisions_changelog' => 'Änderungsprotokoll',
    'pages_revisions_changes' => 'Änderungen',
    'pages_revisions_current' => 'Aktuelle Version',
    'pages_revisions_preview' => 'Vorschau',
    'pages_revisions_restore' => 'Wiederherstellen',
    'pages_revisions_none' => 'Diese Seite hat keine älteren Versionen.',
    'pages_copy_link' => 'Link kopieren',
    'pages_edit_content_link' => 'Inhalt bearbeiten',
    'pages_permissions_active' => 'Seiten-Berechtigungen aktiv',
    'pages_initial_revision' => 'Erste Veröffentlichung',
    'pages_references_update_revision' => 'Automatische Systemaktualisierung interner Links',
    'pages_initial_name' => 'Neue Seite',
    'pages_editing_draft_notification' => 'Sie bearbeiten momenten einen Entwurf, der zuletzt :timeDiff gespeichert wurde.',
    'pages_draft_edited_notification' => 'Diese Seite wurde seit diesem Zeitpunkt verändert. Wir empfehlen Ihnen, diesen Entwurf zu verwerfen.',
    'pages_draft_page_changed_since_creation' => 'Diese Seite wurde seit der Erstellung dieses Entwurfs aktualisiert. Es wird empfohlen, diesen Entwurf zu verwerfen oder darauf zu achten, dass keine Seitenänderungen überschrieben werden.',
    'pages_draft_edit_active' => [
        'start_a' => ':count Benutzer bearbeiten derzeit diese Seite.',
        'start_b' => ':userName bearbeitet jetzt diese Seite.',
        'time_a' => 'seit die Seiten zuletzt aktualisiert wurden.',
        'time_b' => 'in den letzten :minCount Minuten',
        'message' => ':start :time. Achten Sie darauf, keine Änderungen von anderen Benutzern zu überschreiben!',
    ],
    'pages_draft_discarded' => 'Entwurf verworfen. Der aktuelle Seiteninhalt wurde geladen.',
    'pages_specific' => 'Spezifische Seite',
    'pages_is_template' => 'Seitenvorlage',

    // Editor Sidebar
    'page_tags' => 'Seiten-Schlagwörter',
    'chapter_tags' => 'Kapitel-Schlagwörter',
    'book_tags' => 'Buch-Schlagwörter',
    'shelf_tags' => 'Regal-Schlagwörter',
    'tag' => 'Schlagwort',
    'tags' =>  'Schlagwörter',
    'tags_index_desc' => 'Tags können auf Inhalte im System angewendet werden, um eine flexible Form der Kategorisierung anzuwenden. Tags können sowohl einen Schlüssel als auch einen Wert haben, wobei der Wert optional ist. Einmal angewendet, können Inhalte unter Verwendung des Tag-Namens und Wertes abgefragt werden.',
    'tag_name' =>  'Schlagwort Name',
    'tag_value' => 'Inhalt (Optional)',
    'tags_explain' => "Fügen Sie Schlagwörter hinzu, um Ihren Inhalt zu kategorisieren.\nSie können einen erklärenden Inhalt hinzufügen, um eine genauere Unterteilung vorzunehmen.",
    'tags_add' => 'Weiteres Schlagwort hinzufügen',
    'tags_remove' => 'Diesen Tag entfernen',
    'tags_usages' => 'Gesamte Tagnutzung',
    'tags_assigned_pages' => 'Zugewiesen zu Seiten',
    'tags_assigned_chapters' => 'Zugewiesen zu Kapiteln',
    'tags_assigned_books' => 'Zugewiesen zu Büchern',
    'tags_assigned_shelves' => 'Zugewiesen zu Regalen',
    'tags_x_unique_values' => ':count eindeutige Werte',
    'tags_all_values' => 'Alle Werte',
    'tags_view_tags' => 'Tags anzeigen',
    'tags_view_existing_tags' => 'Vorhandene Tags anzeigen',
    'tags_list_empty_hint' => 'Tags können über die Seitenleiste des Seiteneditors oder beim Bearbeiten der Details eines Buches, Kapitels oder Regals zugewiesen werden.',
    'attachments' => 'Anhänge',
    'attachments_explain' => 'Sie können auf Ihrer Seite Dateien hochladen oder Links hinzufügen. Diese werden in der Seitenleiste angezeigt.',
    'attachments_explain_instant_save' => 'Änderungen werden direkt gespeichert.',
    'attachments_upload' => 'Datei hochladen',
    'attachments_link' => 'Link hinzufügen',
    'attachments_upload_drop' => 'Alternativ können Sie eine Datei per Drag & Drop hier hochladen, um sie als Anhang hochzuladen.',
    'attachments_set_link' => 'Link setzen',
    'attachments_delete' => 'Sind Sie sicher, dass Sie diesen Anhang löschen möchten?',
    'attachments_dropzone' => 'Ziehe Dateien hierher, um sie hochzuladen',
    'attachments_no_files' => 'Es wurden bisher keine Dateien hochgeladen.',
    'attachments_explain_link' => 'Wenn Sie keine Datei hochladen möchten, können Sie stattdessen einen Link hinzufügen. Dieser Link kann auf eine andere Seite oder eine Datei im Internet weisen.',
    'attachments_link_name' => 'Link-Name',
    'attachment_link' => 'Link zum Anhang',
    'attachments_link_url' => 'Link zu einer Datei',
    'attachments_link_url_hint' => 'URL einer Seite oder Datei',
    'attach' => 'Hinzufügen',
    'attachments_insert_link' => 'Link zum Anhang auf Seite einfügen',
    'attachments_edit_file' => 'Datei bearbeiten',
    'attachments_edit_file_name' => 'Dateiname',
    'attachments_edit_drop_upload' => 'Ziehen Sie Dateien hierher, um diese hochzuladen und zu überschreiben',
    'attachments_order_updated' => 'Reihenfolge der Anhänge aktualisiert',
    'attachments_updated_success' => 'Anhangdetails aktualisiert',
    'attachments_deleted' => 'Anhang gelöscht',
    'attachments_file_uploaded' => 'Datei erfolgreich hochgeladen',
    'attachments_file_updated' => 'Datei erfolgreich aktualisiert',
    'attachments_link_attached' => 'Link erfolgreich der Seite hinzugefügt',
    'templates' => 'Vorlagen',
    'templates_set_as_template' => 'Seite ist eine Vorlage',
    'templates_explain_set_as_template' => 'Sie können diese Seite als Vorlage festlegen, damit deren Inhalt beim Erstellen anderer Seiten verwendet werden kann. Andere Benutzer können diese Vorlage verwenden, wenn sie die Zugriffsrechte für diese Seite haben.',
    'templates_replace_content' => 'Seiteninhalt ersetzen',
    'templates_append_content' => 'An Seiteninhalt anhängen',
    'templates_prepend_content' => 'Seiteninhalt voranstellen',

    // Profile View
    'profile_user_for_x' => 'Benutzer seit :time',
    'profile_created_content' => 'Erstellte Inhalte',
    'profile_not_created_pages' => ':userName hat noch keine Seiten erstellt.',
    'profile_not_created_chapters' => ':userName hat noch keine Kapitel erstellt.',
    'profile_not_created_books' => ':userName hat noch keine Bücher erstellt.',
    'profile_not_created_shelves' => ':userName hat noch keine Regale erstellt.',

    // Comments
    'comment' => 'Kommentar',
    'comments' => 'Kommentare',
    'comment_add' => 'Kommentieren',
    'comment_placeholder' => 'Geben Sie hier Ihre Kommentare ein (Markdown unterstützt)',
    'comment_count' => '{0} Keine Kommentare|{1} 1 Kommentar|[2,*] :count Kommentare',
    'comment_save' => 'Kommentar speichern',
    'comment_saving' => 'Kommentar wird gespeichert...',
    'comment_deleting' => 'Kommentar wird gelöscht...',
    'comment_new' => 'Neuer Kommentar',
    'comment_created' => ':createDiff kommentiert',
    'comment_updated' => ':updateDiff aktualisiert von :username',
    'comment_deleted_success' => 'Kommentar gelöscht',
    'comment_created_success' => 'Kommentar hinzugefügt',
    'comment_updated_success' => 'Kommentar aktualisiert',
    'comment_delete_confirm' => 'Möchten Sie diesen Kommentar wirklich löschen?',
    'comment_in_reply_to' => 'Antwort auf :commentId',

    // Revision
    'revision_delete_confirm' => 'Sind Sie sicher, dass Sie diese Revision löschen wollen?',
    'revision_restore_confirm' => 'Sind Sie sicher, dass Sie diese Revision wiederherstellen wollen? Der aktuelle Seiteninhalt wird ersetzt.',
    'revision_delete_success' => 'Revision gelöscht',
    'revision_cannot_delete_latest' => 'Die letzte Version kann nicht gelöscht werden.',

    // Copy view
    'copy_consider' => 'Bitte beachten Sie das Untenstehende, wenn Sie Inhalte kopieren.',
    'copy_consider_permissions' => 'Benutzerdefinierte Berechtigungseinstellungen werden nicht kopiert.',
    'copy_consider_owner' => 'Sie werden Eigentümer aller kopierten Inhalte.',
    'copy_consider_images' => 'Bilder auf der Seite werden nicht dupliziert und die originalen Bilder werden die Beziehung zur ursprünglichen Seite, auf der sie hochgeladen wurden, behalten.',
    'copy_consider_attachments' => 'Seitenanhänge werden nicht kopiert.',
    'copy_consider_access' => 'Eine Veränderung der Position, Besitzers oder Berechtigungen könnte dafür sorgen, dass Unberechtigte, Zugriff bekommen.',

    // Conversions
    'convert_to_shelf' => 'In Regal umwandeln',
    'convert_to_shelf_contents_desc' => 'Sie können dieses Buch in ein neues Regal mit dem gleichen Inhalt umwandeln. Kapitel in diesem Buch werden in neue Bücher umgewandelt. Wenn dieses Buch Seiten enthält, die nicht in einem Kapitel sind, wird dieses Buch entsprechend umbenannt und wird Teil des neuen Regals.',
    'convert_to_shelf_permissions_desc' => 'Alle Berechtigungen dieses Buches werden in das neue Regal kopiert und in alle darin enthaltenen neuen Bücher, die keine eigenen Berechtigungen haben. Beachten Sie, dass die Berechtigungen für Regale nicht automatisch auf die enthaltenen Inhalte angewendet werden, wie es bei Büchern der Fall ist.',
    'convert_book' => 'Buch umwandeln',
    'convert_book_confirm' => 'Sind Sie sicher, dass Sie dieses Buch umwandeln möchten?',
    'convert_undo_warning' => 'Dies kann nicht so einfach rückgängig gemacht werden.',
    'convert_to_book' => 'In Buch umwandeln',
    'convert_to_book_desc' => 'Sie können dieses Kapitel zu einem neuen Buch mit dem gleichen Inhalt umwandeln. Alle Berechtigungen für dieses Kapitel werden in das neue Buch übernommen, aber alle vom ursprünglichen Buch vererbten Berechtigungen werden nicht übernommen, daher kann es zu Änderungen im Zugriff kommen.',
    'convert_chapter' => 'Kapitel umwandeln',
    'convert_chapter_confirm' => 'Sind Sie sicher, dass Sie dieses Kapitel umwandeln möchten?',

    // References
    'references' => 'Verweise',
    'references_none' => 'Es gibt keine nachverfolgten Referenzen zu diesem Element.',
    'references_to_desc' => 'Nachfolgend sind alle bekannten Seiten im System aufgeführt, die auf diesen Artikel verweisen.',
];