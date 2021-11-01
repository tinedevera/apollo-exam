const getBreakdown = () => {
	return axios.get('/index');
};

const createNewRandomBreakdown = () => {
	return axios.get('/create');
}

export {
	getBreakdown,
	createNewRandomBreakdown,
}