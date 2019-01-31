process.env.ORA_SDTZ = 'UTC';

var oracledb = require('oracledb');
// var dbConfig = require('./dbconfig.js');

async function run() {
	let connection;

	try {

		let sql, binds, options, result;

		connection = await oracledb.getConnection(  {
			user          : "rebels",
			password      : "Uomwebcup1234",
			connectString : '(description= (address=(protocol=tcps)(port=1522)(host=adb.uk-london-1.oraclecloud.com))(connect_data=(service_name=gpxdbpncn8rxww6_uomwebcup_low.atp.oraclecloud.com))(security=(ssl_server_cert_dn="CN=adwc.eucom-central-1.oraclecloud.com,OU=Oracle BMCS FRANKFURT,O=Oracle Corporation,L=Redwood City,ST=California,C=US"))   )'
		});

		// Insert some data

		/*sql = `INSERT INTO mytab VALUES (:1, :2)`;

		binds = [ [101, "Alpha" ], [102, "Beta" ], [103, "Gamma" ] ];

		// For a complete list of options see the documentation.
		options = {
			autoCommit: true,
			// batchErrors: true,  // continue processing even if there are data errors
			bindDefs: [
				{ type: oracledb.NUMBER },
				{ type: oracledb.STRING, maxSize: 20 }
			]
		};

		result = await connection.executeMany(sql, binds, options);

		console.log("Number of rows inserted:", result.rowsAffected);*/

		// Query the data

		sql = `SELECT * FROM student`;

		binds = {};

		// For a complete list of options see the documentation.
		options = {
			outFormat: oracledb.OBJECT   // query result format
			// extendedMetaData: true,   // get extra metadata
			// fetchArraySize: 100       // internal buffer allocation size for tuning
		};

		result = await connection.execute(sql, binds, options);

		console.log("Column metadata: ", result.metaData);
		console.log("Query results: ");
		console.log(result.rows);

	} catch (err) {
		console.error(err);
	} finally {
		if (connection) {
			try {
				await connection.close();
			} catch (err) {
				console.error(err);
			}
		}
	}
}

run();