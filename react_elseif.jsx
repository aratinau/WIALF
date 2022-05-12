{someCondition === true ? (
    <IfComponent/>
) : someOtherCondition === true ? (
    <ElseIfComponent/>
) : (
    <ElseComponent/>
)}

/* no parentheses */
{courierFile.name  ?
    <small className="text-primary">{courierFile.name}</small>
 :
    <small className="text-dark mb-0">{typeCourierFile(courierFile.type).label}</small>
}

/* one ligne */
{courierFile.name ? courierFile.name : courierFile.filePath}
