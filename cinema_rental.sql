-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 12, 2020 alle 11:37
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_rental`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(4) NOT NULL,
  `Marca` varchar(60) NOT NULL,
  `Modello` varchar(60) NOT NULL,
  `Disponibilità` tinyint(1) NOT NULL,
  `Prezzo` varchar(20) NOT NULL,
  `Descrizione` text NOT NULL,
  `Categoria` varchar(60) NOT NULL,
  `Immagine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`id`, `Marca`, `Modello`, `Disponibilità`, `Prezzo`, `Descrizione`, `Categoria`, `Immagine`) VALUES
(1, 'Sony', 'ALPHA 7S M II', 0, '70,00€€', '\'COMPATIBILITÀ OBIETTIVI Obiettivi attacco E di Sony TIPO DI SENSORE 35 mm TIPO DI SENSORE Sensore CMOS Exmor® full-frame da 35 mm (35,6 × 23,8 mm) NUMERO DI PIXEL (EFFETTIVI) Circa 12,2 MP SENSIBILITÀ ISO (INDICE DI ESPOSIZIONE CONSIGLIATA) Foto: ISO 100-102.400 (espandibile fno a ISO 50-409.600 per le foto), AUTO (ISO 100- 12.800, limite inferiore e limite superiore selezionabili), video: equivalente a 100-102.400 (espandibile fno a equivalente ISO 100-409.600), AUTO (equivalente ISO 100-12.800, limite inferiore e limite superiore selezionabili) DURATA DELLA BATTERIA (FOTO) Circa 310 scatti (mirino) / circa 370 scatti (display LCD) (standard CIPA) TIPO MIRINO Mirino elettronico XGA OLED da 1,3 cm (0,5″) a colori TIPO DISPLAY Unità TFT da 7,5 cm (3″)\'', 'Cameras', 'https://aleconco.s3-eu-west-1.amazonaws.com/sony-alpha-7s-II.jpg'),
(2, 'Red', 'Helium 8K S35', 0, '700,00€', '8K resolution in a Super 35 format and recipient of the highest DxO score ever.\r\n\r\n35.4 Megapixel DSMC2 BRAIN w Sensor\r\n29.90 mm x 15.77 mm (Diag: 33.80 mm)\r\nInclude:\r\nRed Helium 8K S35\r\nRed Touch 7.0″ LCD RED\r\nViewFinder\r\n3 x Red Mini-Mag 480 GB 3 pz\r\nRed Mini-Mag\r\nARRI base plate 15 mm bars / 19 mm bars\r\nPL/EF Lens mount\r\nOLPF STANDARD montato in camera (o a scelta: SKIN TONE/LOW OPTIMIZED)', 'Cameras', 'Redepicw-Kit.jpg'),
(3, 'Panasonic', 'GH5-S', 0, '75,00€', 'Proving that they can push the GH-series even farther into the video realm, the Panasonic Lumix DC-GH5S is a mirrorless Micro Four Thirds camera optimized for movie recording and low-light performance. Revolving around a 10.28MP Digital Live MOS sensor, DCI and UHD 4K video recording is possible at up to 60p and the large individual pixel size also affords impressive low-light performance to an extended ISO 204800, along with Dual Native ISO technology at ISO 400 and ISO 2500. Coupled with an updated Venus Engine, the sensor and processor combination also enables faster readout speeds along with 1.3x less rolling shutter distortion compared to previous GH-series cameras. Internal DCI 4K30p recording is available with 4:2:2 10-bit sampling and a full-size HDMI A connector can be used to simultaneously output to an optional external monitor or recorder. The sensor’s extended sensitivity range has also been used to promote working with V-Log L and Hybrid Log Gamma HDR modes for effectively increasing your dynamic range and affording more flexibility when color grading during post-production.', 'Cameras', 'Panasonic-Lumix-GH5-S.jpg'),
(4, 'Arri', 'Alexa Mini', 1, '1200,00€€', '\'\'Compact, lightweight, and self-contained - ARRI ALEXA Mini is the small and versatile allrounder in the ARRI camera family.\r\n\r\nThe symmetrical design permits filming in any orientation, including upside-down and in portrait mode, while multiple accessory points enable highly creative mounting solutions. In addition, ALEXA Mini comes with a series of interchangeable lens mount, allowing the use of B4 video, EF mount stills lenses, or with the even ARRI Signature Primes with the LPL mount for ALEXA Mini.\r\n\r\n\'\'', 'Cameras', 'Arri-Alexa-Mini-1.jpg'),
(5, 'Arri', 'Alexa Classic', 1, '800,00€', 'Combinando la tecnologia proprietaria ARRI con i migliori strumenti di partner leader di settore, ALEXA è oggi riconosciuto come il sistema più completo e potente mai costruito per la produzione digitale.', 'Cameras', 'Arri-Alexa-classic-starter-kit.jpeg'),
(6, 'Sony', 'F55 CineAlta', 1, '750,00€', 'La telecamera CineAlta PMW-F55 è semplicemente ovunque – dai lungometraggi di Hollywood ai programmi TV, dagli spot a pubblicità, sport e tanto altro ancora. Le sue dimensioni compatte celano una qualità dell’immagine 4K sorprendente e una grande adattabilità, nonché la sua caratteristica più prominente: la straordinaria capacità di evolversi in risposta alle esigenze creative dei registi di tutto il mondo.', 'Cameras', 'sony_pmw-f55-4K.jpg'),
(7, 'GoPro', 'Hero 3 Black Edition', 1, '40,00€', 'The HERO3: Silver Edition is wearable and gear mountable, waterproof to 197\' (60m), and is capable of capturing ultra-wide 1080p 30 fps and 720p 60 fps video plus 11MP photos at a rate of 10 photos per second.', 'Cameras', 'hires2-e1455698976435.jpg'),
(8, 'Red', 'Epic MX', 1, '750,00€', 'The Epic Mysterium-X or Epic MX from RED is a thing of beauty. It’s the kind of camera that you expect will be out in the market for years to come. With the Epic MX, you get a camera that has a 5K sensor capable of capturing 1 to 120 frames per second and at full resolution.\r\n\r\nWhether you use it for fashion spreads or for a feature film to be shown on IMAX 3D theaters, the EPIC MX is as elite a camera as you can get. With this device, you have both elite photography features AND unrivaled cinema-like video capabilities. Not just that, you get all of this in a camera that is just the size of a DSLR camera.\r\n\r\nThe Epic MX also performs well in situations where lighting is not at its best. With this camera, adjusting to the challenging lighting situation is made a whole lot easier thanks to its capability of reaching up to 18 stops of dynamic range with HDRx. Quite impressive, isn’t it?\r\n\r\nThe Epic MX from RED is one remarkable camera with incredible technology that is packaged into a body that weighs just five pounds.', 'Cameras', 'Senza-titolos-1.jpg'),
(9, 'Sony', 'HVR-Z5E – HDV', 1, '50,00€', 'Sony HVR-Z5E (HVRZ5E) HDV Camcorder with 3 ClearVid CMOS sensors and G lens. The HVR-Z5E is designed to enhance creativity and deliver the highest standard of optical and audio quality.\r\n\r\nSony\'s newly designed G Lens is incorporated into the camcorder, boasting excellent resolution, colour and contrast, for breathtaking images.\r\n\r\n3 ClearVid CMOS Sensor system utilising the technology of Exmor provides excellent low-light sensitivity.  This new compact camcorder is ideal when high performance in available light conditions is a requirement. \r\n\r\nThe ergonomically designed body allows flexible shooting under any conditions, while maintaining Sony\'s worldwide reputation for quality and high performance.\r\n\r\nThe HVR-Z5E standard features include 1080/25p HDV native progressive recording modes.', 'Cameras', '305254.jpg'),
(10, 'Nikon', 'D600', 1, '80,00€', 'Nikon D600: Key Specifications\r\n24.3MP Full-frame CMOS sensor (10.5MP DX-format crop mode)\r\nISO 100-6400 (expandable to ISO 50-25,600 equivalent)\r\nMaximum 5.5fps continuous shooting\r\n39-point AF system with 9 cross-type AF points\r\n3.2in 921k-dot LCD screen\r\n1080p30 full HD video\r\nHeadphone jack for audio monitoring in movie mode\r\nUncompressed video recording via HDMI\r\nSingle-axis electronic level in viewfinder, duel-axis (pitch and roll) in live view\r\nDimensions: 141mm x 113mm x 82mm (5.5 × 4.4 × 3.2 in).\r\nWeight: 760 g (1.6 lbs) (camera body only, no battery)', 'Cameras', 'nikon_d600.jpg'),
(12, 'DJI', 'Osmo', 1, '40,00€', 'Motion without blur. Action shots without shake. Perfect video even when you move. Thanks to advanced technologies specifically designed to keep the camera flat no matter how you move it, the DJI Osmo helps you record videos and take photos like never before.', 'Cameras', 'Osmo1_dji_cp_zm_000160_osmo_handheld_4k_camera_1188624.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(4) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Cognome` varchar(60) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Indirizzo` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Telefono` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `Nome`, `Cognome`, `Username`, `Password`, `Indirizzo`, `Email`, `Telefono`) VALUES
(14, 'user', 'user', 'user.prova', '827ccb0eea8a706c4c34a16891f84e7b', 'prova', 'user.prova@prova.it', '3334445556'),
(15, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@admin.com', '897318311');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
