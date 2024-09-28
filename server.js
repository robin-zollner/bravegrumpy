import  express from 'express';
import path from 'path';
import { fileURLToPath } from 'url';
import fs from 'fs';
import helmet from 'helmet';
import viteConfig from './vite.config.js';
import getFilenames from './getFiles.js';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const HOST = process.env.HOST || 'localhost';
const PORT = process.env.PORT || 3000;

const app = express();
app.use(helmet());
app.use(express.static(__dirname));

//if (process.env.NODE_ENV === 'production') {
app.use(express.static(path.join(__dirname, 'build')));
//}

app.get(`/api/files`, (req, res) => {

    const directoryPath = __dirname;
    const htmlFiles = getFilenames(directoryPath, '.html');
    res.json(htmlFiles);

/*    fs.readdir(directoryPath, (err, files) => {
        if (err) {
            return res.status(500).send('Unable to scan directory');
        }

        const htmlFiles = files.filter(file => file.endsWith('.html'));
        res.json(htmlFiles);
    });
*/
});



app.get('*', (req, res) => {
    const filePath = path.join(__dirname, req.url);
    const defaultFile = path.join(__dirname, 'index.html');

    if ((fs.existsSync(filePath)) && fs.lstatSync(filePath).isFile()) {
        res.sendFile(filePath);
    } else {
        res.sendFile(defaultFile);
    }
    //res.sendFile(viteConfig);
});

app.get('*', (req, res) => {
    res.sendFile(path.resolve(__dirname, 'index.html'));
});

app.listen(PORT, HOST, () => {
    console.log(`Server is  running at http://${HOST}:${PORT}/`);
});