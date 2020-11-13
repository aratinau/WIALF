const TestContext = () => {

    const contextValue = useContext(ThemeContext);

    const handleChange = event => {
        const value = event.currentTarget.value;
        contextValue.updateTheme(value);
    }

    return (
        <div>
            <h1>Test Context{contextValue.theme}</h1>
            <select name="theme" defaultValue={contextValue.theme} onChange={handleChange}>
                <option value="dark">Dark</option>
                <option value="light">Light</option>
            </select>
        </div>
    )
}

const App = () => {
    const [theme, setTheme] = useState("light");

    const contextValue = {
        theme: theme,
        updateTheme: setTheme
    }

    return (
        <>
            <ThemeContext.Provider value={contextValue}>
                <TestContext />
            </ThemeContext.Provider>
        </>
    );
}

///////////////////////////////
// ThemeContext.jsx
import React from "react";

export default React.createContext({
    theme: "",
    updateTheme: name => {}
});
