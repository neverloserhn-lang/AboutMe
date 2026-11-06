# AboutMe bilingual update

This project copy adds a local Indonesian/English interface switch.

## Apply
1. Make a backup of your current `about-me` folder.
2. Extract this ZIP.
3. Copy the extracted project files into your existing `C:\laragon\www\about-me` folder and allow overwriting.
4. Do not replace your `.env` file. This ZIP intentionally does not include `.env`, `vendor`, or `node_modules`.
5. In the project terminal run:
   ```bash
   npm run build
   ```
   Or run `npm run dev` while developing.
6. Refresh the website. The language button is next to the theme button. The choice is saved in browser localStorage.

## Notes
- The switch translates the interface phrases included in `resources/js/language.js` on public pages and the admin dashboard.
- User-created content such as diary entries, visitor messages, names, and email addresses is intentionally not translated or modified.
- If you add new Indonesian interface text later, add its Indonesian-to-English pair to `phraseTranslations` in `resources/js/language.js`.
- The dashboard is a standalone Blade page, so it loads the language script separately.
